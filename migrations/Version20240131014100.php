<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240131014100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE character_photo (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapon_photo (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE characters ADD photo_url_id INT DEFAULT NULL, ADD description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE characters ADD CONSTRAINT FK_3A29410ED470ADCF FOREIGN KEY (photo_url_id) REFERENCES character_photo (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3A29410ED470ADCF ON characters (photo_url_id)');
        $this->addSql('ALTER TABLE weapons ADD photo_url_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE weapons ADD CONSTRAINT FK_520EBBE1D470ADCF FOREIGN KEY (photo_url_id) REFERENCES weapon_photo (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_520EBBE1D470ADCF ON weapons (photo_url_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characters DROP FOREIGN KEY FK_3A29410ED470ADCF');
        $this->addSql('ALTER TABLE weapons DROP FOREIGN KEY FK_520EBBE1D470ADCF');
        $this->addSql('DROP TABLE character_photo');
        $this->addSql('DROP TABLE weapon_photo');
        $this->addSql('DROP INDEX UNIQ_3A29410ED470ADCF ON characters');
        $this->addSql('ALTER TABLE characters DROP photo_url_id, DROP description');
        $this->addSql('DROP INDEX UNIQ_520EBBE1D470ADCF ON weapons');
        $this->addSql('ALTER TABLE weapons DROP photo_url_id');
    }
}
