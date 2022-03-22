<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220321095916 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD email VARCHAR(255) NOT NULL, ADD phone VARCHAR(255) NOT NULL, ADD fax VARCHAR(255) NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD codepostal VARCHAR(255) NOT NULL, ADD adress1 VARCHAR(255) NOT NULL, ADD adress2 VARCHAR(255) NOT NULL, ADD adress_livraison1 VARCHAR(255) NOT NULL, ADD adress_livraison2 VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP email, DROP phone, DROP fax, DROP nom, DROP prenom, DROP codepostal, DROP adress1, DROP adress2, DROP adress_livraison1, DROP adress_livraison2');
    }
}
