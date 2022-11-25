<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220729085354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE actividad_act CHANGE actividadtipo_act actividadtipo_act VARCHAR(50) DEFAULT NULL, CHANGE nombre_act nombre_act VARCHAR(50) DEFAULT NULL, CHANGE foto_act foto_act VARCHAR(300) DEFAULT NULL, CHANGE nivel_act nivel_act VARCHAR(50) DEFAULT NULL, CHANGE salida_act salida_act VARCHAR(50) DEFAULT NULL, CHANGE llegada_act llegada_act VARCHAR(50) DEFAULT NULL, CHANGE salidacoordenadas_act salidacoordenadas_act VARCHAR(50) DEFAULT NULL, CHANGE llegadacoordenadas_eve llegadacoordenadas_eve VARCHAR(50) DEFAULT NULL, CHANGE wikiloc_act wikiloc_act VARCHAR(300) DEFAULT NULL');
        $this->addSql('ALTER TABLE evento_eve CHANGE titulo_eve titulo_eve VARCHAR(100) DEFAULT NULL, CHANGE estado_eve estado_eve VARCHAR(30) DEFAULT NULL, CHANGE nivel_eve nivel_eve VARCHAR(30) DEFAULT NULL, CHANGE transportetipo_eve transportetipo_eve VARCHAR(30) DEFAULT NULL, CHANGE salidaida_eve salidaida_eve VARCHAR(50) DEFAULT NULL, CHANGE salidavuelta_eve salidavuelta_eve VARCHAR(50) DEFAULT NULL, CHANGE llegadavuelta_eve llegadavuelta_eve VARCHAR(50) DEFAULT NULL, CHANGE llegadaida_eve llegadaida_eve VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE persona_per CHANGE usuariotipo_per usuariotipo_per VARCHAR(30) DEFAULT NULL, CHANGE fotopropia_per fotopropia_per VARCHAR(300) DEFAULT NULL, CHANGE nombre_per nombre_per VARCHAR(50) DEFAULT NULL, CHANGE apellido1_per apellido1_per VARCHAR(50) DEFAULT NULL, CHANGE apellido2_per apellido2_per VARCHAR(50) DEFAULT NULL, CHANGE movil_per movil_per VARCHAR(15) DEFAULT NULL, CHANGE dni_per dni_per VARCHAR(15) DEFAULT NULL, CHANGE email_per email_per VARCHAR(100) DEFAULT NULL, CHANGE contrasenna_per contrasenna_per VARCHAR(30) DEFAULT NULL, CHANGE coche_per coche_per VARCHAR(10) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE actividad_act CHANGE actividadtipo_act actividadtipo_act VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE nombre_act nombre_act VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE foto_act foto_act VARCHAR(300) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE nivel_act nivel_act VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE salida_act salida_act VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE llegada_act llegada_act VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE salidacoordenadas_act salidacoordenadas_act VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE llegadacoordenadas_eve llegadacoordenadas_eve VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE wikiloc_act wikiloc_act VARCHAR(300) DEFAULT NULL COLLATE `utf8_spanish_ci`');
        $this->addSql('ALTER TABLE evento_eve CHANGE titulo_eve titulo_eve VARCHAR(100) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE estado_eve estado_eve VARCHAR(30) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE nivel_eve nivel_eve VARCHAR(30) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE transportetipo_eve transportetipo_eve VARCHAR(30) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE salidaida_eve salidaida_eve VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE salidavuelta_eve salidavuelta_eve VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE llegadavuelta_eve llegadavuelta_eve VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE llegadaida_eve llegadaida_eve VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`');
        $this->addSql('ALTER TABLE persona_per CHANGE usuariotipo_per usuariotipo_per VARCHAR(30) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE fotopropia_per fotopropia_per VARCHAR(300) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE nombre_per nombre_per VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE apellido1_per apellido1_per VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE apellido2_per apellido2_per VARCHAR(50) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE movil_per movil_per VARCHAR(15) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE dni_per dni_per VARCHAR(15) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE email_per email_per VARCHAR(100) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE contrasenna_per contrasenna_per VARCHAR(30) DEFAULT NULL COLLATE `utf8_spanish_ci`, CHANGE coche_per coche_per VARCHAR(10) DEFAULT NULL COLLATE `utf8_spanish_ci`');
    }
}
