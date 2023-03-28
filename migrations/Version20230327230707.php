<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327230707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE age_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE complexity_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE people_count_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quest_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE age (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE complexity (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE people_count (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE quest (id INT NOT NULL, complexity_id INT NOT NULL, people_count_id INT NOT NULL, age_id INT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, photo VARCHAR(255) NOT NULL, more_photo JSON DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4317F817DAC7F446 ON quest (complexity_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4317F81737F9161F ON quest (people_count_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4317F817CC80CD12 ON quest (age_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4317F81712469DE2 ON quest (category_id)');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT FK_4317F817DAC7F446 FOREIGN KEY (complexity_id) REFERENCES complexity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT FK_4317F81737F9161F FOREIGN KEY (people_count_id) REFERENCES people_count (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT FK_4317F817CC80CD12 FOREIGN KEY (age_id) REFERENCES age (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT FK_4317F81712469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE age_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE category_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE complexity_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE people_count_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quest_id_seq CASCADE');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT FK_4317F817DAC7F446');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT FK_4317F81737F9161F');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT FK_4317F817CC80CD12');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT FK_4317F81712469DE2');
        $this->addSql('DROP TABLE age');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE complexity');
        $this->addSql('DROP TABLE people_count');
        $this->addSql('DROP TABLE quest');
    }
}
