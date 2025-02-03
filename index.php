<?php
$categories = [
    'first_person_shooters' => [
        ['name' => 'Counter-Strike 2', 'image' => 'cs2.jpg', 'description' => 'Redefines tactical gameplay with stunning visuals, revamped mechanics, and the ultimate test of skill and strategy—get ready to dominate the battlefield!', 'rating' => 4.8],
        ['name' => 'Call of Duty: WWII', 'image' => 'wwii.jpg', 'description' => 'Drops you into the intense battles of World War II with a gripping campaign, epic multiplayer, and a chilling Nazi Zombies mode.', 'rating' => 4.5],
        ['name' => 'Valorant', 'image' => 'valorant.jpg', 'description' => 'Tactical first-person shooter developed by Riot Games, blending precise gunplay with unique character abilities in a competitive 5v5 format', 'rating' => 4.7]
    ],
    'racing_games' => [
        ['name' => 'Forza Horizon 5', 'image' => 'forza.jpg', 'description' => 'Open-world racing adventure', 'rating' => 4.9],
        ['name' => 'Gran Turismo 7', 'image' => 'granturismo.jpg', 'description' => 'Realistic racing simulation', 'rating' => 4.6],
        ['name' => 'Need for Speed Heat', 'image' => 'nfs.png', 'description' => 'Street racing excitement', 'rating' => 4.4],
    ],
    'action_adventure' => [
        ['name' => 'Mortal Kombat 11', 'image' => 'mk.png', 'description' => 'Cranks up the intensity with stunning visuals, iconic fighters, a gripping cinematic story, and the most savage, bone-crushing fatalities in gaming history.', 'rating' => 4.8],
        ['name' => 'Control', 'image' => 'control.jpg', 'description' => 'Intuitive with groundbreaking physix', 'rating' => 4.9],
        ['name' => 'GoW', 'image' => 'gw.jpg', 'description' => 'Critically acclaimed action-adventure game series developed by Santa Monica Studio and published by Sony Interactive Entertainment. ', 'rating' => 5.0],
    ],
    'survival_games' => [
        ['name' => 'Outcast', 'image' => 'outcast.jpg', 'description' => 'A spine-chilling survival horror where you brave a derelict asylum with just a camcorder, uncovering dark secrets while dodging relentless terrors.', 'rating' => 4.7],
        ['name' => 'Resident Evil 7: BioHazard', 'image' => 're.jpg', 'description' => 'First-person survival horror game where players control Ethan Winters, exploring a haunted mansion to find his missing wife, battling terrifying enemies, solving puzzles, and unraveling dark secrets.'
        ,'rating' => 4.9],
        ['name' => 'Dying Light', 'image' => 'dl.jpg', 'description' => 'Action-packed survival horror game that combines parkour movement with intense combat against hordes of zombies in a sprawling open-world setting', 'rating' => 4.5]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Explorer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a class="tr" href="https://git.io/typing-svg"><img src="https://readme-typing-svg.demolab.com?font=Orbitron&size=26&pause=1000&color=940000&center=true&repeat=true&width=500&height=80&lines=Welcome+To+The+Game+Explorer" alt="Typing SVG" /></a>
    <div class="theme-toggle-container">
        <button id="theme-toggle" class="theme-toggle">Theme</button>
    </div>
    <div class="game-container">
        <div class="category fps-category">
            <h2>First Person Shooters</h2>
            <div class="game-grid">
                <?php foreach($categories['first_person_shooters'] as $game): ?>
                    <div class="game-card" data-name="<?= $game['name'] ?>">
                        <img src="images/<?= $game['image'] ?>" alt="<?= $game['name'] ?>">
                        <div class="game-info">
                            <h3><?= $game['name'] ?></h3>
                            <p><?= $game['description'] ?></p>
                            <div class="rating">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star <?= $i <= $game['rating'] ? 'active' : '' ?>">★</span>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="category racing-category">
            <h2>Racing Games</h2>
            <div class="game-grid">
                <?php foreach($categories['racing_games'] as $game): ?>
                    <div class="game-card" data-name="<?= $game['name'] ?>">
                        <img src="images/<?= $game['image'] ?>" alt="<?= $game['name'] ?>">
                        <div class="game-info">
                            <h3><?= $game['name'] ?></h3>
                            <p><?= $game['description'] ?></p>
                            <div class="rating">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star <?= $i <= $game['rating'] ? 'active' : '' ?>">★</span>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="game-container">
        <div class=" category action_adventure">
            <h2>Action Games</h2>
            <div class="game-grid">
                <?php foreach($categories['action_adventure'] as $game): ?>
                    <div class="game-card" data-name="<?= $game['name'] ?>">
                        <img src="images/<?= $game['image'] ?>" alt="<?= $game['name'] ?>">
                        <div class="game-info">
                            <h3><?= $game['name'] ?></h3>
                            <p><?= $game['description'] ?></p>
                            <div class="rating">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star <?= $i <= $game['rating'] ? 'active' : '' ?>">★</span>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class=" category survival_games">
            <h2>Survival Games</h2>
            <div class="next-ting">
                <?php foreach($categories['survival_games'] as $game): ?>
                    <div class="game-card" data-name="<?= $game['name'] ?>">
                        <img src="images/<?= $game['image'] ?>" alt="<?= $game['name'] ?>">
                        <div class="game-info">
                            <h3><?= $game['name'] ?></h3>
                            <p><?= $game['description'] ?></p>
                            <div class="rating">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star <?= $i <= $game['rating'] ? 'active' : '' ?>">★</span>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>      
        <div id="game-modal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div id="modal-details"></div>
        </div>
    </div>
</div>
    <footer class="footer">
        <h3>M1</h3>
        <div class="social-links">
      <a href="https://twitter.com/BookofT_" target="_blank" aria-label="Twitter">
        <img src="images/tt.jpg" alt="Twitter" class="github">
      </a>
      <a href="https://www.github.com/Thewsthews" target="_blank" aria-label="GitHub">
        <img src="images/part2.jpg" alt="GitHub" class="github">
      </a>
    </div>
    <div class="footer-container">
            <p>2024 TT All Rights Reserved</p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>