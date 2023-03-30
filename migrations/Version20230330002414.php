<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330002414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE quest_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quest2_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE quest3_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE quest3 (id INT NOT NULL, age_id INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT NOT NULL, picture VARCHAR(255) NOT NULL, more_photos TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EE421CA4CC80CD12 ON quest3 (age_id)');
        $this->addSql('COMMENT ON COLUMN quest3.more_photos IS \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quest3 ADD CONSTRAINT FK_EE421CA4CC80CD12 FOREIGN KEY (age_id) REFERENCES age (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT fk_4317f817dac7f446');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT fk_4317f81737f9161f');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT fk_4317f817cc80cd12');
        $this->addSql('ALTER TABLE quest DROP CONSTRAINT fk_4317f81712469de2');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT fk_99452c32dac7f446');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT fk_99452c3237f9161f');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT fk_99452c32cc80cd12');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT fk_99452c3212469de2');
        $this->addSql('DROP TABLE quest');
        $this->addSql('DROP TABLE quest2');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE quest3_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE quest_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quest2_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE quest (id INT NOT NULL, complexity_id INT NOT NULL, people_count_id INT NOT NULL, age_id INT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, photo VARCHAR(255) NOT NULL, more_photo JSON DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uniq_4317f81712469de2 ON quest (category_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_4317f817cc80cd12 ON quest (age_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_4317f81737f9161f ON quest (people_count_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_4317f817dac7f446 ON quest (complexity_id)');
        $this->addSql('CREATE TABLE quest2 (id INT NOT NULL, complexity_id INT NOT NULL, people_count_id INT DEFAULT NULL, age_id INT DEFAULT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, photo VARCHAR(255) NOT NULL, more_photo TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_99452c3212469de2 ON quest2 (category_id)');
        $this->addSql('CREATE INDEX idx_99452c32cc80cd12 ON quest2 (age_id)');
        $this->addSql('CREATE INDEX idx_99452c3237f9161f ON quest2 (people_count_id)');
        $this->addSql('CREATE INDEX idx_99452c32dac7f446 ON quest2 (complexity_id)');
        $this->addSql('COMMENT ON COLUMN quest2.more_photo IS \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT fk_4317f817dac7f446 FOREIGN KEY (complexity_id) REFERENCES complexity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT fk_4317f81737f9161f FOREIGN KEY (people_count_id) REFERENCES people_count (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT fk_4317f817cc80cd12 FOREIGN KEY (age_id) REFERENCES age (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT fk_4317f81712469de2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT fk_99452c32dac7f446 FOREIGN KEY (complexity_id) REFERENCES complexity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT fk_99452c3237f9161f FOREIGN KEY (people_count_id) REFERENCES people_count (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT fk_99452c32cc80cd12 FOREIGN KEY (age_id) REFERENCES age (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT fk_99452c3212469de2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest3 DROP CONSTRAINT FK_EE421CA4CC80CD12');
        $this->addSql('DROP TABLE quest3');
    }
}
