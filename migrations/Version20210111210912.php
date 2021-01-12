<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210111210912 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livre ADD filename VARCHAR(255) NOT NULL, ADD updated_at DATETIME NOT NULL, ADD image_name_name VARCHAR(255) DEFAULT NULL, ADD image_name_original_name VARCHAR(255) DEFAULT NULL, ADD image_name_mime_type VARCHAR(255) DEFAULT NULL, ADD image_name_size INT DEFAULT NULL, ADD image_name_dimensions LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livre DROP filename, DROP updated_at, DROP image_name_name, DROP image_name_original_name, DROP image_name_mime_type, DROP image_name_size, DROP image_name_dimensions');
    }
}
