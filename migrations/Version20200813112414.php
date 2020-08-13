<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813112414 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_moral (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, nom_entreprise VARCHAR(50) NOT NULL, identifiant_entreprise VARCHAR(20) NOT NULL, raison_social VARCHAR(30) NOT NULL, UNIQUE INDEX UNIQ_83FF4A819EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_non_salarie (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, carte_identite VARCHAR(25) NOT NULL, UNIQUE INDEX UNIQ_4FC7282C19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_salarie (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, profession VARCHAR(100) NOT NULL, salaire NUMERIC(10, 0) NOT NULL, nom_employeur VARCHAR(100) NOT NULL, adresse_entreprise VARCHAR(100) NOT NULL, raison_social VARCHAR(25) NOT NULL, identifiant_entreprise VARCHAR(25) NOT NULL, UNIQUE INDEX UNIQ_D0B37E6719EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, responsable_compte_id INT NOT NULL, adresse VARCHAR(50) NOT NULL, telephone VARCHAR(20) NOT NULL, email VARCHAR(100) NOT NULL, date_inscription DATETIME NOT NULL, type_client VARCHAR(20) NOT NULL, INDEX IDX_C82E74F833736 (responsable_compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_bloque (id INT AUTO_INCREMENT NOT NULL, compte_id INT NOT NULL, frais_ouverture NUMERIC(10, 0) NOT NULL, montant_renumeration NUMERIC(10, 0) NOT NULL, duree_blocage INT NOT NULL, UNIQUE INDEX UNIQ_2B4331DFF2C56620 (compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_courant (id INT AUTO_INCREMENT NOT NULL, compte_id INT NOT NULL, agios NUMERIC(10, 0) NOT NULL, UNIQUE INDEX UNIQ_73F05D6CF2C56620 (compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_epargne (id INT AUTO_INCREMENT NOT NULL, compte_id INT NOT NULL, frais_ouverture NUMERIC(10, 0) NOT NULL, montant_renumeration NUMERIC(10, 0) NOT NULL, UNIQUE INDEX UNIQ_19FDB51AF2C56620 (compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comptes (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, numero_compte VARCHAR(50) NOT NULL, cle_rib INT NOT NULL, solde NUMERIC(10, 0) NOT NULL, date_ouverture DATETIME NOT NULL, numero_agence INT NOT NULL, INDEX IDX_5673580119EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_compte (id INT AUTO_INCREMENT NOT NULL, etat_compte VARCHAR(20) NOT NULL, date_changement_etat DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat_compte_comptes (etat_compte_id INT NOT NULL, comptes_id INT NOT NULL, INDEX IDX_5764C44B25720CC (etat_compte_id), INDEX IDX_5764C44BDCED588B (comptes_id), PRIMARY KEY(etat_compte_id, comptes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsable_compte (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(100) NOT NULL, mot_de_passe VARCHAR(100) NOT NULL, id_employe INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE client_moral ADD CONSTRAINT FK_83FF4A819EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE client_non_salarie ADD CONSTRAINT FK_4FC7282C19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE client_salarie ADD CONSTRAINT FK_D0B37E6719EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE clients ADD CONSTRAINT FK_C82E74F833736 FOREIGN KEY (responsable_compte_id) REFERENCES responsable_compte (id)');
        $this->addSql('ALTER TABLE compte_bloque ADD CONSTRAINT FK_2B4331DFF2C56620 FOREIGN KEY (compte_id) REFERENCES comptes (id)');
        $this->addSql('ALTER TABLE compte_courant ADD CONSTRAINT FK_73F05D6CF2C56620 FOREIGN KEY (compte_id) REFERENCES comptes (id)');
        $this->addSql('ALTER TABLE compte_epargne ADD CONSTRAINT FK_19FDB51AF2C56620 FOREIGN KEY (compte_id) REFERENCES comptes (id)');
        $this->addSql('ALTER TABLE comptes ADD CONSTRAINT FK_5673580119EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE etat_compte_comptes ADD CONSTRAINT FK_5764C44B25720CC FOREIGN KEY (etat_compte_id) REFERENCES etat_compte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE etat_compte_comptes ADD CONSTRAINT FK_5764C44BDCED588B FOREIGN KEY (comptes_id) REFERENCES comptes (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client_moral DROP FOREIGN KEY FK_83FF4A819EB6921');
        $this->addSql('ALTER TABLE client_non_salarie DROP FOREIGN KEY FK_4FC7282C19EB6921');
        $this->addSql('ALTER TABLE client_salarie DROP FOREIGN KEY FK_D0B37E6719EB6921');
        $this->addSql('ALTER TABLE comptes DROP FOREIGN KEY FK_5673580119EB6921');
        $this->addSql('ALTER TABLE compte_bloque DROP FOREIGN KEY FK_2B4331DFF2C56620');
        $this->addSql('ALTER TABLE compte_courant DROP FOREIGN KEY FK_73F05D6CF2C56620');
        $this->addSql('ALTER TABLE compte_epargne DROP FOREIGN KEY FK_19FDB51AF2C56620');
        $this->addSql('ALTER TABLE etat_compte_comptes DROP FOREIGN KEY FK_5764C44BDCED588B');
        $this->addSql('ALTER TABLE etat_compte_comptes DROP FOREIGN KEY FK_5764C44B25720CC');
        $this->addSql('ALTER TABLE clients DROP FOREIGN KEY FK_C82E74F833736');
        $this->addSql('DROP TABLE client_moral');
        $this->addSql('DROP TABLE client_non_salarie');
        $this->addSql('DROP TABLE client_salarie');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE compte_bloque');
        $this->addSql('DROP TABLE compte_courant');
        $this->addSql('DROP TABLE compte_epargne');
        $this->addSql('DROP TABLE comptes');
        $this->addSql('DROP TABLE etat_compte');
        $this->addSql('DROP TABLE etat_compte_comptes');
        $this->addSql('DROP TABLE responsable_compte');
    }
}
