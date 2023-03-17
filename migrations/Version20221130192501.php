<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221130192501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD full_name VARCHAR(255) NOT NULL, ADD genreuser VARCHAR(255) NOT NULL, ADD region VARCHAR(255) NOT NULL, ADD municipalite VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL, ADD adresseagence VARCHAR(255) NOT NULL, ADD jourtravail VARCHAR(255) NOT NULL, ADD heuretravail VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP full_name, DROP genreuser, DROP region, DROP municipalite, DROP telephone, DROP adresseagence, DROP jourtravail, DROP heuretravail');
    }
}
