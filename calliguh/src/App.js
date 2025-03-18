import React from 'react';
import logo from './logo.svg';
import './App.css';
import Counter from './Counter';
import 'bootstrap/dist/css/bootstrap.min.css';
import { ThemeProvider } from 'react-bootstrap';

function App() {
    return (
        <ThemeProvider> {/* Wrap your app with ThemeProvider */}
            <div className="App">
                <header className="App-header">
                    <img src={logo} className="App-logo" alt="logo" />
                    <Counter />
                    <p>
                        Subscribe to{' '}
                        <a
                            className="App-link"
                            href="https://www.youtube.com/@MoriCalliope"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Mori Calliope's channel
                        </a>
                    </p>
                </header>
            </div>
        </ThemeProvider>
    );
}

export default App;