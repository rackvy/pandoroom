<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406022255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quest3 ADD mo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD tu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD we VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD th VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD fr VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD sa VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD su VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD mo_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD tu_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD we_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD th_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD fr_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD sa_price VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest3 ADD su_price VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE quest3 DROP mo');
        $this->addSql('ALTER TABLE quest3 DROP tu');
        $this->addSql('ALTER TABLE quest3 DROP we');
        $this->addSql('ALTER TABLE quest3 DROP th');
        $this->addSql('ALTER TABLE quest3 DROP fr');
        $this->addSql('ALTER TABLE quest3 DROP sa');
        $this->addSql('ALTER TABLE quest3 DROP su');
        $this->addSql('ALTER TABLE quest3 DROP mo_price');
        $this->addSql('ALTER TABLE quest3 DROP tu_price');
        $this->addSql('ALTER TABLE quest3 DROP we_price');
        $this->addSql('ALTER TABLE quest3 DROP th_price');
        $this->addSql('ALTER TABLE quest3 DROP fr_price');
        $this->addSql('ALTER TABLE quest3 DROP sa_price');
        $this->addSql('ALTER TABLE quest3 DROP su_price');
    }
}
