<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210111201744 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livre ADD image_name_name VARCHAR(255) DEFAULT NULL, ADD image_name_original_name VARCHAR(255) DEFAULT NULL, ADD image_name_mime_type VARCHAR(255) DEFAULT NULL, ADD image_name_size INT DEFAULT NULL, ADD image_name_dimensions LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', DROP image_name');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livre ADD image_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP image_name_name, DROP image_name_original_name, DROP image_name_mime_type, DROP image_name_size, DROP image_name_dimensions');
    }
}
