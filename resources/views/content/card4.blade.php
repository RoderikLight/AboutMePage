<div id="memory-game">
    <h2>Memory Game</h2>
    <div class="memory-grid">
        <div class="memory-card">A</div>
        <div class="memory-card">B</div>
        <div class="memory-card">C</div>
        <div class="memory-card">D</div>
        <div class="memory-card">E</div>
        <div class="memory-card">F</div>
        <div class="memory-card">G</div>
        <div class="memory-card">H</div>
        <div class="memory-card">A</div>
        <div class="memory-card">B</div>
        <div class="memory-card">C</div>
        <div class="memory-card">D</div>
        <div class="memory-card">E</div>
        <div class="memory-card">F</div>
        <div class="memory-card">G</div>
        <div class="memory-card">H</div>
    </div>
</div>

<style>
    #memory-game {
        text-align: center;
        margin: 20px;
    }
    .memory-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }
    .memory-card {
        background-color: #007bff;
        color: transparent;
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 8px;
        user-select: none;
        transition: color 0.3s;
    }
    .memory-card.visible {
        color: #fff; /* Show text when visible */
    }
    .memory-card.matched {
        background-color: #007bff;
        color: #fff;
        cursor: default;
    }
</style>