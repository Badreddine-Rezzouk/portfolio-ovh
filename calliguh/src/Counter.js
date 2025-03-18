import React, { useState } from 'react';
import Button from 'react-bootstrap/Button';

export default function Counter() {
    const [counted, setCounted] = useState(1);

    const increment = () => {
        setCounted(counted + 1);
    };

    return (
        <Button className="btn" onClick={increment}>
            {counted}
        </Button>
    );
}