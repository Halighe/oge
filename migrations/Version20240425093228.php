<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425093228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL, ADD is_verified TINYINT(1) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE scoretest scoretest INT DEFAULT NULL, CHANGE city city VARCHAR(50) DEFAULT NULL, CHANGE phone phone VARCHAR(15) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_EMAIL ON user');
        $this->addSql('ALTER TABLE user DROP roles, DROP is_verified, CHANGE email email VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(100) NOT NULL, CHANGE scoretest scoretest INT NOT NULL, CHANGE city city VARCHAR(50) NOT NULL, CHANGE phone phone VARCHAR(15) DEFAULT NULL');
    }
}
