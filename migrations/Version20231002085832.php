<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231002085832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE catalogue (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label (id INT AUTO_INCREMENT NOT NULL, catalogue_id INT NOT NULL, slug VARCHAR(255) NOT NULL, translation_fr LONGTEXT DEFAULT NULL, translation_en LONGTEXT DEFAULT NULL, INDEX IDX_EA750E84A7843DC (catalogue_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, featured_image_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, current_level INT DEFAULT NULL, featured_text LONGTEXT DEFAULT NULL, type INT NOT NULL, enabled TINYINT(1) NOT NULL, INDEX IDX_5E3DE4776E694C1F (featured_image_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social_media (id INT AUTO_INCREMENT NOT NULL, featured_image_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, INDEX IDX_20BC159E6E694C1F (featured_image_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE work_experience (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, company VARCHAR(255) DEFAULT NULL, location VARCHAR(255) DEFAULT NULL, contract_type INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, begin_date DATE NOT NULL, end_date DATE NOT NULL, enabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE label ADD CONSTRAINT FK_EA750E84A7843DC FOREIGN KEY (catalogue_id) REFERENCES catalogue (id)');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE4776E694C1F FOREIGN KEY (featured_image_id_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159E6E694C1F FOREIGN KEY (featured_image_id_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE article ADD enabled TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE label DROP FOREIGN KEY FK_EA750E84A7843DC');
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE4776E694C1F');
        $this->addSql('ALTER TABLE social_media DROP FOREIGN KEY FK_20BC159E6E694C1F');
        $this->addSql('DROP TABLE catalogue');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE social_media');
        $this->addSql('DROP TABLE work_experience');
        $this->addSql('ALTER TABLE article DROP enabled');
    }
}
