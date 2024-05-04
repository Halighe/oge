<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425091821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE favorite (id INT AUTO_INCREMENT NOT NULL, video_id_id INT NOT NULL, INDEX IDX_68C58ED9F02697F5 (video_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lhack (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(200) NOT NULL, url1 VARCHAR(200) NOT NULL, url2 VARCHAR(200) DEFAULT NULL, preview VARCHAR(200) DEFAULT NULL, text1 VARCHAR(700) DEFAULT NULL, url3 VARCHAR(200) DEFAULT NULL, text2 VARCHAR(1300) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lhacksug (id INT AUTO_INCREMENT NOT NULL, fio VARCHAR(200) NOT NULL, email VARCHAR(100) NOT NULL, role INT NOT NULL, text VARCHAR(2000) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, task_id_id INT NOT NULL, text1 VARCHAR(400) DEFAULT NULL, url VARCHAR(200) DEFAULT NULL, text2 VARCHAR(200) DEFAULT NULL, answer VARCHAR(50) NOT NULL, INDEX IDX_B6F7494EB8E08577 (task_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE result (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, question_id_id INT NOT NULL, result INT NOT NULL, data DATETIME NOT NULL, INDEX IDX_136AC1139D86650F (user_id_id), INDEX IDX_136AC1134FAF8F53 (question_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tasks (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, text VARCHAR(200) NOT NULL, url VARCHAR(200) DEFAULT NULL, video1 INT DEFAULT NULL, video2 INT DEFAULT NULL, video3 INT DEFAULT NULL, video4 INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, fio VARCHAR(100) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(100) NOT NULL, code VARCHAR(100) DEFAULT NULL, scoretest INT NOT NULL, city VARCHAR(50) NOT NULL, phone VARCHAR(15) DEFAULT NULL, school VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(200) NOT NULL, name VARCHAR(200) NOT NULL, description VARCHAR(400) DEFAULT NULL, conspect VARCHAR(2000) DEFAULT NULL, likes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED9F02697F5 FOREIGN KEY (video_id_id) REFERENCES video (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EB8E08577 FOREIGN KEY (task_id_id) REFERENCES tasks (id)');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC1139D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC1134FAF8F53 FOREIGN KEY (question_id_id) REFERENCES question (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED9F02697F5');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EB8E08577');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC1139D86650F');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC1134FAF8F53');
        $this->addSql('DROP TABLE favorite');
        $this->addSql('DROP TABLE lhack');
        $this->addSql('DROP TABLE lhacksug');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE result');
        $this->addSql('DROP TABLE tasks');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE video');
    }
}
