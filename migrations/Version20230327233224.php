<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327233224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE quest2_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE quest2 (id INT NOT NULL, complexity_id INT NOT NULL, people_count_id INT DEFAULT NULL, age_id INT DEFAULT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, photo VARCHAR(255) NOT NULL, more_photo TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_99452C32DAC7F446 ON quest2 (complexity_id)');
        $this->addSql('CREATE INDEX IDX_99452C3237F9161F ON quest2 (people_count_id)');
        $this->addSql('CREATE INDEX IDX_99452C32CC80CD12 ON quest2 (age_id)');
        $this->addSql('CREATE INDEX IDX_99452C3212469DE2 ON quest2 (category_id)');
        $this->addSql('COMMENT ON COLUMN quest2.more_photo IS \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT FK_99452C32DAC7F446 FOREIGN KEY (complexity_id) REFERENCES complexity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT FK_99452C3237F9161F FOREIGN KEY (people_count_id) REFERENCES people_count (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT FK_99452C32CC80CD12 FOREIGN KEY (age_id) REFERENCES age (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest2 ADD CONSTRAINT FK_99452C3212469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE quest2_id_seq CASCADE');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT FK_99452C32DAC7F446');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT FK_99452C3237F9161F');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT FK_99452C32CC80CD12');
        $this->addSql('ALTER TABLE quest2 DROP CONSTRAINT FK_99452C3212469DE2');
        $this->addSql('DROP TABLE quest2');
    }
}
