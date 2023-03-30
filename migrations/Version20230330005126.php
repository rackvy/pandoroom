<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230330005126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quest3 ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE quest3 ADD complexity_id INT NOT NULL');
        $this->addSql('ALTER TABLE quest3 ADD people_count_id INT NOT NULL');
        $this->addSql('ALTER TABLE quest3 ADD CONSTRAINT FK_EE421CA412469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest3 ADD CONSTRAINT FK_EE421CA4DAC7F446 FOREIGN KEY (complexity_id) REFERENCES complexity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE quest3 ADD CONSTRAINT FK_EE421CA437F9161F FOREIGN KEY (people_count_id) REFERENCES people_count (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_EE421CA412469DE2 ON quest3 (category_id)');
        $this->addSql('CREATE INDEX IDX_EE421CA4DAC7F446 ON quest3 (complexity_id)');
        $this->addSql('CREATE INDEX IDX_EE421CA437F9161F ON quest3 (people_count_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE quest3 DROP CONSTRAINT FK_EE421CA412469DE2');
        $this->addSql('ALTER TABLE quest3 DROP CONSTRAINT FK_EE421CA4DAC7F446');
        $this->addSql('ALTER TABLE quest3 DROP CONSTRAINT FK_EE421CA437F9161F');
        $this->addSql('DROP INDEX IDX_EE421CA412469DE2');
        $this->addSql('DROP INDEX IDX_EE421CA4DAC7F446');
        $this->addSql('DROP INDEX IDX_EE421CA437F9161F');
        $this->addSql('ALTER TABLE quest3 DROP category_id');
        $this->addSql('ALTER TABLE quest3 DROP complexity_id');
        $this->addSql('ALTER TABLE quest3 DROP people_count_id');
    }
}
