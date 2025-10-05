<?php
global $topURL, $baseURL;
require "../../Common-files/redirect.php";
$title = '模组制作 - Badreddine Rezzouk';
?>

<!DOCTYPE html>

<html>
<head>
    <?php require '../../Common-files/header.php'; ?>
    <style>
        .mod-card:hover{
            cursor: pointer;
            background-color: rgba(0,0,0,0.7);
        }
        body{
            overflow-x: hidden;
        }

        /* Category dropdown styles */
        .cat-dropdown { position: relative; }
        .cat-menu { display: none; position: absolute; top: 100%; left: 0; right: 0; background: #ffffff; border: 1px solid rgba(0,0,0,0.15); border-radius: .5rem; z-index: 1050; max-height: 280px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15); overflow: hidden; }
        .cat-menu-header { display: flex; justify-content: space-between; align-items: center; gap: .5rem; padding: .5rem .75rem; border-bottom: 1px solid rgba(0,0,0,.1); background: #f8f9fa; position: sticky; top: 0; z-index: 1; }
        .cat-menu-body { max-height: 240px; overflow: auto; padding: .5rem .75rem; }
        .cat-dropdown.searching .cat-menu { display: block; }
        @media (hover: none) { .cat-dropdown.searching .cat-menu { display: block; } }

        /* Tag/pill input styles */
        .tag-input { display: flex; flex-wrap: wrap; align-items: center; gap: .25rem; min-height: 38px; padding: .375rem .5rem; border: 1px solid #ced4da; border-radius: .375rem; background: #fff; cursor: text; }
        .tag-input:focus-within { border-color: #86b7fe; box-shadow: 0 0 0 .25rem rgba(13,110,253,.25); }
        .tag-input .tag-text-input { border: none; outline: none; flex: 1 1 120px; min-width: 80px; padding: 0; height: 1.6rem; }
        .pill { display: inline-flex; align-items: center; gap: .35rem; padding: .15rem .5rem; background: #e9f5ff; color: #0d6efd; border: 1px solid #b6daff; border-radius: 999px; font-size: .85rem; }
        .pill .pill-remove { appearance: none; border: none; background: transparent; color: inherit; font-weight: bold; line-height: 1; padding: 0; cursor: pointer; opacity: .7; }
        .pill .pill-remove:hover { opacity: 1; }
    </style>
</head>
<body>
<?php require "../../Common-files/navbar.php" ?>
<div class="gradient-box">
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 mx-auto text-center w-50 border border-5 shadow-lg slideInLeft">
        <h2> 我的游戏模组</h2>
    </div>
    <div class="halfbox"></div>
    <div class="bg-white p-4 rounded-3 offset-1 w-50 border border-5 shadow-lg slideInLeft">
        <p>
            游戏模组制作是一种通过添加或修改内容来改变电子游戏的做法，其目的是实现开发者原本未设想的游戏玩法。
        </p>
    </div>
    <div class="box"></div>
    <div class="row mod-row">
    <div class="filters col-10 col-lg-3 offset-1 mb-2 bg-white p-4 rounded-3 border border-5 shadow-lg slideInLeft">
        <label for="gameFilter"> 相关游戏: </label>
        <select id="gameFilter" class="form-select mb-3">
            <option value="">所有游戏</option>
        </select>
        <label for="categoryFilter"> 类别（搜索）: </label>
        <div class="cat-dropdown mt-2" id="catDropdown">
            <div class="tag-input mb-1" id="categoryTagInput">
                <div id="selectedCategoryPills" class="d-flex flex-wrap align-items-center gap-1"></div>
                <input id="categoryFilter" class="tag-text-input" list="categoryList" placeholder="所有类别" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" inputmode="search" name="category-search">
            </div>
            <datalist id="categoryList"></datalist>
            <div class="cat-menu shadow">
                <div class="cat-menu-header">
                    <strong>类别</strong>
                    <button id="clearCategories" type="button" class="btn btn-sm btn-outline-secondary">清除</button>
                </div>
                <div class="cat-menu-body">
                    <div id="categoryCheckboxes"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="modList" class="mod-list col-10 col-lg-7 mx-auto bg-gradient-mod p-4 rounded-3 border border-5 border-black shadow-lg fadeInRight"></div>
    <div class="halfbox"></div>
    </div>
    <script>

        let allMods = [], games = [], categories = [];
        const selectedCategories = new Set();

        document.addEventListener('DOMContentLoaded', () => {
            fetch('<?php echo $baseURL?>mods-json/mods.json')
                .then(res => res.json())
                .then(data => {
                    allMods = data.mods;
                    games = data.games;
                    categories = data.categories;

                    populateFilters();
                    renderMods(allMods);
                });

            document.getElementById('gameFilter').addEventListener('change', applyFilters);
            const categoryInput = document.getElementById('categoryFilter');
            const catDropdownWrap = document.getElementById('catDropdown');
            const catMenu = catDropdownWrap ? catDropdownWrap.querySelector('.cat-menu') : null;
            let hoveringCatMenu = false;
            const updateSearchingState = () => {
                if (!catDropdownWrap) return;
                const val = (categoryInput.value || '').trim();
                if (document.activeElement === categoryInput || val.length > 0 || hoveringCatMenu) {
                    catDropdownWrap.classList.add('searching');
                } else {
                    catDropdownWrap.classList.remove('searching');
                }
            };
            categoryInput.addEventListener('input', () => { filterCategoryList(categoryInput.value); applyFilters(); updateSearchingState(); });
            categoryInput.addEventListener('change', () => { filterCategoryList(categoryInput.value); applyFilters(); updateSearchingState(); });
            // Make clicking on the tag-input focus the real input
            const tagBox = document.getElementById('categoryTagInput');
            if (tagBox) {
                tagBox.addEventListener('pointerdown', (e) => {
                    // avoid focusing when clicking on a pill remove button
                    const target = e.target;
                    if (target && (target.classList?.contains('pill-remove') || target.closest?.('.pill'))) return;
                    categoryInput.focus();
                });
            }
            // Disable native datalist/autofill overlay while searching; we keep our custom menu
            categoryInput.addEventListener('focus', () => {
                if (categoryInput.hasAttribute('list')) categoryInput.dataset.listId = categoryInput.getAttribute('list') || '';
                categoryInput.removeAttribute('list');
                updateSearchingState();
            });
            categoryInput.addEventListener('blur', () => { setTimeout(updateSearchingState, 50); });
            if (catMenu) {
                catMenu.addEventListener('mouseenter', () => { hoveringCatMenu = true; updateSearchingState(); });
                catMenu.addEventListener('mouseleave', () => { hoveringCatMenu = false; updateSearchingState(); });
            }
            // Close when clicking outside
            document.addEventListener('pointerdown', (e) => {
                if (!catDropdownWrap) return;
                if (!catDropdownWrap.contains(e.target)) {
                    hoveringCatMenu = false;
                    if (document.activeElement !== categoryInput) {
                        catDropdownWrap.classList.remove('searching');
                    }
                }
            });

            const catContainer = document.getElementById('categoryCheckboxes');
            catContainer.addEventListener('change', (e) => {
                const el = e.target;
                if (el && el.classList.contains('category-check')) {
                    const id = el.getAttribute('data-id');
                    if (el.checked) {
                        // enforce max 3 selections
                        if (selectedCategories.size >= 3) {
                            el.checked = false;
                            // optional: brief visual feedback
                            el.closest('.category-item')?.classList.add('shake');
                            setTimeout(() => el.closest('.category-item')?.classList.remove('shake'), 300);
                            return;
                        }
                        selectedCategories.add(id);
                    } else {
                        selectedCategories.delete(id);
                    }
                    renderSelectedPills();
                    updateCheckboxDisabled();
                    applyFilters();
                }
            });
            document.getElementById('clearCategories').addEventListener('click', () => {
                selectedCategories.clear();
                // Uncheck all
                catContainer.querySelectorAll('.category-check').forEach(cb => { cb.checked = false; cb.disabled = false; });
                renderSelectedPills();
                updateCheckboxDisabled();
                applyFilters();
            });
        });

        function populateFilters() {
            const gameFilter = document.getElementById('gameFilter');
            games.forEach(g => {
                const opt = document.createElement('option');
                opt.value = g.id;
                opt.textContent = g.name;
                gameFilter.appendChild(opt);
            });

            const categoryList = document.getElementById('categoryList');
            categories.forEach(c => {
                const opt = document.createElement('option');
                opt.value = c.name;
                opt.dataset.id = c.id;
                categoryList.appendChild(opt);
            });

            // Render clickable checkbox list
            renderCategoryCheckboxes(categories);
            // Initial UI sync
            renderSelectedPills();
            updateCheckboxDisabled();
        }

        function getCategoryById(id) {
            return categories.find(c => c.id === id);
        }

        function renderSelectedPills() {
            const holder = document.getElementById('selectedCategoryPills');
            if (!holder) return;
            const items = Array.from(selectedCategories);
            holder.innerHTML = items.map(id => {
                const cat = getCategoryById(id);
                const label = cat ? cat.name : id;
                return `<span class="pill" data-id="${id}">${label}<button type="button" class="pill-remove" aria-label="移除" title="移除" data-id="${id}">×</button></span>`;
            }).join('');

            // attach remove handlers
            holder.querySelectorAll('.pill-remove').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const cid = e.currentTarget.getAttribute('data-id');
                    selectedCategories.delete(cid);
                    // uncheck corresponding checkbox
                    const cb = document.querySelector(`.category-check[data-id="${cid}"]`);
                    if (cb) cb.checked = false;
                    renderSelectedPills();
                    updateCheckboxDisabled();
                    applyFilters();
                });
            });
        }

        function updateCheckboxDisabled() {
            const limitReached = selectedCategories.size >= 3;
            document.querySelectorAll('#categoryCheckboxes .category-check').forEach(cb => {
                if (!cb.checked) cb.disabled = limitReached;
                else cb.disabled = false;
            });
        }

        // Render the clickable list of categories with checkboxes
        function renderCategoryCheckboxes(list) {
            const container = document.getElementById('categoryCheckboxes');
            if (!container) return;
            container.innerHTML = list.map(c => {
                const id = c.id;
                const name = c.name;
                const checked = selectedCategories.has(id) ? 'checked' : '';
                return `<div class="form-check form-check-sm category-item" data-name="${name.toLowerCase()}" data-id="${id.toLowerCase()}">
    <input class="form-check-input category-check" type="checkbox" id="cat-${id}" data-id="${id}" ${checked}>
    <label class="form-check-label" for="cat-${id}">${name} <small class="text-muted">(${id})</small></label>
</div>`;
            }).join('');
        }

        // Filter (show/hide) category checkbox rows based on the search input
        function filterCategoryList(term) {
            const container = document.getElementById('categoryCheckboxes');
            if (!container) return;
            const t = (term || '').trim().toLowerCase();
            container.querySelectorAll('.category-item').forEach(el => {
                if (!t) { el.style.display = ''; return; }
                const name = el.getAttribute('data-name') || '';
                const id = el.getAttribute('data-id') || '';
                el.style.display = (name.includes(t) || id.includes(t)) ? '' : 'none';
            });
        }

        function applyFilters() {
            const selectedGame = document.getElementById('gameFilter').value;
            const categoryInput = document.getElementById('categoryFilter').value.trim().toLowerCase();

            // Resolve exact category id if user picked a suggestion or typed exact match (used only if no checkboxes selected)
            let selectedCategoryId = '';
            if (categoryInput) {
                const exact = categories.find(c => c.name.toLowerCase() === categoryInput || c.id.toLowerCase() === categoryInput);
                if (exact) selectedCategoryId = exact.id;
            }

            const hasSelections = selectedCategories.size > 0;

            const filtered = allMods.filter(mod => {
                const gameMatch = selectedGame ? mod.game === selectedGame : true;

                let categoryMatch = true;
                if (hasSelections) {
                    // Inclusive OR: any overlap between mod categories and selected checkboxes
                    categoryMatch = mod.categories.some(id => selectedCategories.has(id));
                } else if (selectedCategoryId) {
                    // Exact match via datalist/text
                    categoryMatch = mod.categories.includes(selectedCategoryId);
                } else if (categoryInput) {
                    // Partial text search across category ids and names
                    const term = categoryInput;
                    categoryMatch = mod.categories.some(id => {
                        const cat = categories.find(c => c.id === id);
                        const name = cat ? cat.name.toLowerCase() : '';
                        return id.toLowerCase().includes(term) || name.includes(term);
                    });
                }

                return gameMatch && categoryMatch;
            });

            renderMods(filtered);
        }

        function getGameName(gameId) {
            const game = games.find(g => g.id === gameId);
            return game ? game.name : '未知游戏';
        }

        // Applies a staggered animation delay to mod items
        function setDelay(_, baseDelay) {
            const items = document.querySelectorAll('#modList .slideInRight');
            // Reset and apply incremental delays
            items.forEach((el, i) => {
                el.style.animationDelay = '';
                el.style.webkitAnimationDelay = '';
                const delay = (i * (typeof baseDelay === 'number' ? baseDelay : 0)) + 'ms';
                el.style.animationDelay = delay;
                el.style.webkitAnimationDelay = delay;
            });
        }

        function renderMods(mods) {
            const baseURL = "<?php echo $baseURL ?>";
            const topURL = "<?php echo $topURL ?>";
            const list = document.getElementById('modList');
            list.innerHTML = '';
            mods.forEach(mod => {
                const div = document.createElement('div');
                div.className = 'mod-section';
                const gameName = getGameName(mod.game);
                const modThumbnail = topURL + "Images/mod/" + mod.id + "/" + mod.images[0];

                let statusPill = '';
                if (mod.status === 'released') {
                    statusPill += `<span class="badge rounded-pill text-bg-success"> 已发布 </span>`;
                } else if (mod.status === 'working') {
                    statusPill += `<span class="badge rounded-pill text-bg-warning"> 制作中 </span>`;
                }
                let borderColor = '';
                if(mod.categories.length === 1){
                    switch(mod.categories[0]){
                        case "sinder":
                            borderColor += 'border border-sinder';
                            break;
                        case "aura-gx":
                            borderColor += 'border-aura-gx border';
                            break;
                        default:
                            borderColor += 'border';
                            break;

                    }
                } else {
                    borderColor += 'border';
                }

                // Set the click handler using a proper function
                div.onclick = function () {
                    window.location.href = baseURL + 'Passions/mod-file/mod-file.php?modId=' + mod.id;
                };

                div.innerHTML = `
                    <div class="mod-card row rounded-3 border-5 ${borderColor} bg-white p-1 g-2 clearfix slideInRight">
                        <div class="col-lg-6 col-12">
                            <img class="rounded rounded-start-1 img-fluid w-100" src="${modThumbnail}">
                        </div>
                        <div class="col-lg-6 col-12">
                            <h4>${mod.title} | <small>${gameName}</small></h4>
                            <h6>${mod.date}</h6>
                            ${statusPill}
                            <p>${mod.shortdescription}</p>
                        </div>
                    </div>
                    <div class="quarterbox"></div>
                `;
                list.appendChild(div);
                if (typeof setDelay === 'function') setDelay(null, 100);
            });
            if(!mods){
                const div = document.createElement('div')
                div.className = 'row rounded-3 p-1 g-2'
                div.innerHTML = `<img class="rounded rounded-start-1 img-fluid w-100" src="<?php echo $topURL?>Images/wow-such-empty.png">`
            }
        }
    </script>

</div>
<?php require "../../Common-files/footer.php" ?>
</body>
</html>