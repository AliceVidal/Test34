<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311140108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, company_size VARCHAR(255) NOT NULL, company_group TINYINT(1) NOT NULL, employees_number VARCHAR(255) NOT NULL, transportation_means VARCHAR(255) NOT NULL, living_space VARCHAR(255) NOT NULL, nomadic_employees VARCHAR(255) NOT NULL, eco_gestures LONGTEXT DEFAULT NULL, objectives VARCHAR(255) NOT NULL, transition_type VARCHAR(255) NOT NULL, number_of_companies_concerned VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_pack DROP FOREIGN KEY FK_ED5F12EA1919B217');
        $this->addSql('ALTER TABLE user_pack DROP FOREIGN KEY FK_ED5F12EAA76ED395');
        $this->addSql('ALTER TABLE user_pack ADD CONSTRAINT FK_ED5F12EA1919B217 FOREIGN KEY (pack_id) REFERENCES pack (id)');
        $this->addSql('ALTER TABLE user_pack ADD CONSTRAINT FK_ED5F12EAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE company');
        $this->addSql('ALTER TABLE user_pack DROP FOREIGN KEY FK_ED5F12EAA76ED395');
        $this->addSql('ALTER TABLE user_pack DROP FOREIGN KEY FK_ED5F12EA1919B217');
        $this->addSql('ALTER TABLE user_pack ADD CONSTRAINT FK_ED5F12EAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_pack ADD CONSTRAINT FK_ED5F12EA1919B217 FOREIGN KEY (pack_id) REFERENCES pack (id) ON DELETE CASCADE');
    }
}
