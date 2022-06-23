<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220623080421 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE statistique (id INT AUTO_INCREMENT NOT NULL, nombre_semi INT NOT NULL, nombre_p INT NOT NULL, nombre_cam INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE twt (id INT AUTO_INCREMENT NOT NULL, rang VARCHAR(255) NOT NULL, bon_entree VARCHAR(255) NOT NULL, code_collecteur VARCHAR(255) NOT NULL, rs_collecteur VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, zone VARCHAR(255) NOT NULL, agriculteur VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, code_transporteur VARCHAR(255) NOT NULL, rs_transporteur VARCHAR(255) NOT NULL, chauffeur VARCHAR(255) NOT NULL, num_tel VARCHAR(255) NOT NULL, n1 VARCHAR(255) NOT NULL, date_entree DATETIME NOT NULL, tarif_trans VARCHAR(255) NOT NULL, operateur VARCHAR(255) NOT NULL, article VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE statistique');
        $this->addSql('DROP TABLE twt');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
