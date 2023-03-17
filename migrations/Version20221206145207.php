<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221206145207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE esprit');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5313FB8B8');
        $this->addSql('ALTER TABLE discussion DROP FOREIGN KEY discussion_ibfk_2');
        $this->addSql('ALTER TABLE discussion DROP FOREIGN KEY discussion_ibfk_1');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY message_ibfk_1');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY message_ibfk_2');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404251A965E');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY reclamation_ibfk_2');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404521DA6C8');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY reclamation_ibfk_1');
        $this->addSql('ALTER TABLE reservationvisite DROP FOREIGN KEY FK_79DBB080D1A24775');
        $this->addSql('ALTER TABLE reservationvisite DROP FOREIGN KEY FK_79DBB080CF007E10');
        $this->addSql('ALTER TABLE user MODIFY idUser INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON user');
        $this->addSql('ALTER TABLE user ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', ADD password VARCHAR(255) NOT NULL, ADD full_name VARCHAR(255) NOT NULL, ADD activated LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', DROP fullName, DROP mdp, CHANGE email email VARCHAR(180) NOT NULL, CHANGE idUser id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE esprit (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5313FB8B8 FOREIGN KEY (idUserA) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE discussion ADD CONSTRAINT discussion_ibfk_2 FOREIGN KEY (idUserR) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE discussion ADD CONSTRAINT discussion_ibfk_1 FOREIGN KEY (idUserS) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT message_ibfk_1 FOREIGN KEY (idDiscussionM) REFERENCES discussion (idDiscussion)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT message_ibfk_2 FOREIGN KEY (idUserS_M) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404251A965E FOREIGN KEY (iduserrecs) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT reclamation_ibfk_2 FOREIGN KEY (idAnnonceRec) REFERENCES annonce (idAnnonce)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404521DA6C8 FOREIGN KEY (iduserrecr) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT reclamation_ibfk_1 FOREIGN KEY (idCategorieRec) REFERENCES categorie (idCategorie)');
        $this->addSql('ALTER TABLE reservationvisite ADD CONSTRAINT FK_79DBB080D1A24775 FOREIGN KEY (idAnnonceRV) REFERENCES annonce (idAnnonce)');
        $this->addSql('ALTER TABLE reservationvisite ADD CONSTRAINT FK_79DBB080CF007E10 FOREIGN KEY (idUserRV) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE user MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('DROP INDEX `PRIMARY` ON user');
        $this->addSql('ALTER TABLE user ADD fullName VARCHAR(255) NOT NULL, ADD mdp VARCHAR(255) NOT NULL, DROP roles, DROP password, DROP full_name, DROP activated, CHANGE email email VARCHAR(255) NOT NULL, CHANGE id idUser INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (idUser)');
    }
}
