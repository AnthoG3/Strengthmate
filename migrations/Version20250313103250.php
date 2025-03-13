<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250313103250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD suivi VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE presentation CHANGE content content LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE temoignages CHANGE rating_percent rating INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP suivi');
        $this->addSql('ALTER TABLE presentation CHANGE content content VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE temoignages CHANGE rating rating_percent INT NOT NULL');
    }
}
