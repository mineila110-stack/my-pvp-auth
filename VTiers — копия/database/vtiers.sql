CREATE DATABASE IF NOT EXISTS vtiers
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE vtiers;

-- Пользователи сайта
CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(32) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL,
                       discord VARCHAR(100) DEFAULT NULL,
                       minecraft_nickname VARCHAR(32) DEFAULT NULL,
                       role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Режимы PvP
CREATE TABLE modes (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(50) NOT NULL,
                       slug VARCHAR(50) NOT NULL UNIQUE,
                       description TEXT DEFAULT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Игроки
CREATE TABLE players (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         nickname VARCHAR(32) NOT NULL UNIQUE,
                         discord VARCHAR(100) DEFAULT NULL,
                         avatar VARCHAR(255) DEFAULT NULL,
                         description TEXT DEFAULT NULL,
                         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Тиры игроков
CREATE TABLE player_tiers (
                              id INT AUTO_INCREMENT PRIMARY KEY,
                              player_id INT NOT NULL,
                              mode_id INT NOT NULL,
                              tier VARCHAR(10) NOT NULL,
                              points INT NOT NULL DEFAULT 0,

                              FOREIGN KEY (player_id)
                                  REFERENCES players(id)
                                  ON DELETE CASCADE,

                              FOREIGN KEY (mode_id)
                                  REFERENCES modes(id)
                                  ON DELETE CASCADE,

                              UNIQUE(player_id, mode_id)
);

-- Очередь на тиртест
CREATE TABLE test_queue (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            player_id INT DEFAULT NULL,
                            nickname VARCHAR(32) NOT NULL,
                            discord VARCHAR(100) DEFAULT NULL,
                            mode_id INT NOT NULL,
                            status ENUM('waiting', 'testing', 'completed', 'cancelled')
        NOT NULL DEFAULT 'waiting',
                            joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

                            FOREIGN KEY (player_id)
                                REFERENCES players(id)
                                ON DELETE SET NULL,

                            FOREIGN KEY (mode_id)
                                REFERENCES modes(id)
                                ON DELETE CASCADE
);

-- История тиртестов
CREATE TABLE test_history (
                              id INT AUTO_INCREMENT PRIMARY KEY,
                              player_id INT DEFAULT NULL,
                              nickname VARCHAR(32) NOT NULL,
                              mode_id INT NOT NULL,
                              old_tier VARCHAR(10) DEFAULT NULL,
                              new_tier VARCHAR(10) DEFAULT NULL,
                              points INT DEFAULT 0,
                              tester VARCHAR(32) DEFAULT NULL,
                              result TEXT DEFAULT NULL,
                              tested_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

                              FOREIGN KEY (player_id)
                                  REFERENCES players(id)
                                  ON DELETE SET NULL,

                              FOREIGN KEY (mode_id)
                                  REFERENCES modes(id)
                                  ON DELETE CASCADE
);

-- Турниры
CREATE TABLE tournaments (
                             id INT AUTO_INCREMENT PRIMARY KEY,
                             name VARCHAR(100) NOT NULL,
                             description TEXT DEFAULT NULL,
                             mode_id INT DEFAULT NULL,
                             status ENUM('upcoming', 'active', 'finished')
        NOT NULL DEFAULT 'upcoming',
                             max_players INT DEFAULT 32,
                             start_date DATETIME DEFAULT NULL,
                             created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

                             FOREIGN KEY (mode_id)
                                 REFERENCES modes(id)
                                 ON DELETE SET NULL
);

-- Участники турниров
CREATE TABLE tournament_players (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    tournament_id INT NOT NULL,
                                    player_id INT NOT NULL,
                                    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

                                    FOREIGN KEY (tournament_id)
                                        REFERENCES tournaments(id)
                                        ON DELETE CASCADE,

                                    FOREIGN KEY (player_id)
                                        REFERENCES players(id)
                                        ON DELETE CASCADE,

                                    UNIQUE(tournament_id, player_id)
);

-- Режимы
INSERT INTO modes (name, slug, description) VALUES
                                                ('Sword', 'sword', 'Классический PvP с мечом'),
                                                ('Axe', 'axe', 'PvP с топорами'),
                                                ('Mace', 'mace', 'Mace PvP'),
                                                ('SMP', 'smp', 'SMP PvP'),
                                                ('UHC', 'uhc', 'UHC PvP'),
                                                ('Crystal', 'crystal', 'Crystal PvP'),
                                                ('Pot', 'pot', 'Potion PvP');

-- Тестовые игроки
INSERT INTO players (nickname, discord) VALUES
                                            ('VANDLEX', 'VANDLEX'),
                                            ('DreamPvP', 'DreamPvP'),
                                            ('ClownPierce', 'ClownPierce'),
                                            ('Minemanner', 'Minemanner');

-- Тиры игроков
INSERT INTO player_tiers (player_id, mode_id, tier, points)
SELECT p.id, m.id, 'HT1', 1000
FROM players p
         JOIN modes m ON m.slug = 'sword'
WHERE p.nickname = 'VANDLEX';

INSERT INTO player_tiers (player_id, mode_id, tier, points)
SELECT p.id, m.id, 'HT1', 980
FROM players p
         JOIN modes m ON m.slug = 'sword'
WHERE p.nickname = 'DreamPvP';

INSERT INTO player_tiers (player_id, mode_id, tier, points)
SELECT p.id, m.id, 'LT1', 900
FROM players p
         JOIN modes m ON m.slug = 'sword'
WHERE p.nickname = 'ClownPierce';

INSERT INTO player_tiers (player_id, mode_id, tier, points)
SELECT p.id, m.id, 'LT1', 880
FROM players p
         JOIN modes m ON m.slug = 'sword'
WHERE p.nickname = 'Minemanner';