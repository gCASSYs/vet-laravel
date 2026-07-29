-- MySQL dump 10.13  Distrib 8.4.10, for Linux (x86_64)
--
-- Host: localhost    Database: vet
-- ------------------------------------------------------
-- Server version	8.4.10

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('HTtZRFR0HsayvOlWTdFphGFQmQ7FeNNZkTa1QalK',NULL,'172.18.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0','eyJfdG9rZW4iOiJYOGhQUTA4R21hUTFKaG1QRFR0MUUzNHVaVFZYSmdWcHUxMTBuTTUzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1784748751),('L3O7zopfTZLLmoXTUTW0hrOJw4q7rdH8Sq0qvVii',NULL,'172.18.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0','eyJfdG9rZW4iOiJzOGJnMkdZTkNqWVR1TGFaaFN5RmRZRDZPYzRSY1VsaFV1ZmxwZlZMIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1784836664),('RDEx0XDy1yzN8qZ8a2MoPxpsexDBO3nWEWrUqd6f',NULL,'172.18.0.1','Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0','eyJfdG9rZW4iOiJmOFJwZFYwSmJ4RDI2NVlvNjRaamlMcEtWNWxsM1NVNkRoM1IzQ2hjIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1785353427);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_agendamento`
--

DROP TABLE IF EXISTS `tbl_agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_agendamento` (
  `id_agendamento` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `id_pet` int NOT NULL,
  `id_servico` int NOT NULL,
  `data_solicitada` date NOT NULL,
  `horario_solicitado` time NOT NULL,
  `status` varchar(40) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'EM_AVALIACAO',
  `observacao_cliente` text COLLATE utf8mb4_general_ci,
  `observacao_clinica` text COLLATE utf8mb4_general_ci,
  `data_solicitacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_confirmacao` datetime DEFAULT NULL,
  `data_atualizacao_agendamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agendamento`),
  KEY `fk_agendamento_cliente` (`id_cliente`),
  KEY `fk_agendamento_pet` (`id_pet`),
  KEY `fk_agendamento_servico` (`id_servico`),
  CONSTRAINT `fk_agendamento_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`),
  CONSTRAINT `fk_agendamento_pet` FOREIGN KEY (`id_pet`) REFERENCES `tbl_pet` (`id_pet`),
  CONSTRAINT `fk_agendamento_servico` FOREIGN KEY (`id_servico`) REFERENCES `tbl_servico` (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agendamento`
--

LOCK TABLES `tbl_agendamento` WRITE;
/*!40000 ALTER TABLE `tbl_agendamento` DISABLE KEYS */;
INSERT INTO `tbl_agendamento` VALUES (1,1,1,1,'2026-07-05','09:00:00','EM_AVALIACAO','Gostaria de consulta para avaliação geral da Mel.',NULL,'2026-07-02 17:17:35',NULL,'2026-07-02 17:17:35'),(2,2,3,3,'2026-07-06','10:30:00','EM_AVALIACAO','Solicito exame para investigar alergia do Thor.',NULL,'2026-07-02 17:17:35',NULL,'2026-07-02 17:17:35'),(3,3,4,2,'2026-07-07','14:00:00','CONFIRMADO','Vacinação anual da Luna.','Agendamento confirmado pela recepção.','2026-07-02 17:17:35','2026-07-02 17:17:35','2026-07-02 17:17:35');
/*!40000 ALTER TABLE `tbl_agendamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_banner`
--

DROP TABLE IF EXISTS `tbl_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL AUTO_INCREMENT,
  `pagina` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `titulo` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `subtitulo` text COLLATE utf8mb4_general_ci,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_banner`
--

LOCK TABLES `tbl_banner` WRITE;
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
INSERT INTO `tbl_banner` VALUES (1,'home','Cada minuto importa quando seu pet precisa de cuidado','Atendimento veterinário atento, estrutura preparada e decisões rápidas para proteger quem faz parte da sua família.','img/banner-home.jpg',1,'2026-07-02 17:01:05','2026-07-02 17:01:05'),(2,'servicos','Nossos serviços','Soluções veterinárias para cada etapa da vida do seu pet.','img/banner-servicos.jpg',1,'2026-07-02 17:01:05','2026-07-02 17:01:05'),(3,'galeria','Galeria Animalis','Conheça alguns ambientes, momentos e cuidados da nossa clínica.','img/banner-galeria.jpg',1,'2026-07-02 17:01:05','2026-07-02 17:01:05'),(4,'contato','Fale conosco','Nossa equipe está pronta para orientar você e cuidar do seu pet.','img/banner-contato.jpg',1,'2026-07-02 17:01:05','2026-07-02 17:01:05');
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cliente`
--

LOCK TABLES `tbl_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
INSERT INTO `tbl_cliente` VALUES (1,'Patrícia Lima','patricia.lima@email.com','(11)98888-1111','senha123',1,'2026-07-02 17:07:56','2026-07-02 17:07:56'),(2,'Roberto Santos','roberto.santos@email.com','(11)97777-2222','senha123',1,'2026-07-02 17:07:56','2026-07-02 17:07:56'),(3,'Fernanda Alves','fernanda.alves@email.com','(11)96666-3333','senha123',1,'2026-07-02 17:07:56','2026-07-02 17:07:56');
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_configuracao_site`
--

DROP TABLE IF EXISTS `tbl_configuracao_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_configuracao_site` (
  `id_configuracao` int NOT NULL AUTO_INCREMENT,
  `nome_clinica` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao_footer` text COLLATE utf8mb4_general_ci,
  `email` varchar(120) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `whatsapp` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `endereco` varchar(180) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cidade` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` char(2) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_criacao_configuracao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_configuracao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_configuracao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_configuracao_site`
--

LOCK TABLES `tbl_configuracao_site` WRITE;
/*!40000 ALTER TABLE `tbl_configuracao_site` DISABLE KEYS */;
INSERT INTO `tbl_configuracao_site` VALUES (1,'Animalis Clínica Veterinária','img/logo-animalis.png','A Animalis oferece atendimento veterinário completo, com cuidado, estrutura e acolhimento para pets e tutores.','contato@animalis.com.br','(11)2555-5555','(11)99999-9999','Avenida Marechal Tito, 1500','São Paulo','SP','https://instagram.com/animalis','https://facebook.com/animalis','2026-07-02 17:00:14','2026-07-02 17:00:14');
/*!40000 ALTER TABLE `tbl_configuracao_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_depoimento`
--

DROP TABLE IF EXISTS `tbl_depoimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_depoimento` (
  `id_depoimento` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `tipo_cliente` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mensagem` text COLLATE utf8mb4_general_ci NOT NULL,
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '0',
  `data_criacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_depoimento`),
  KEY `fk_depoimento_cliente` (`id_cliente`),
  CONSTRAINT `fk_depoimento_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_depoimento`
--

LOCK TABLES `tbl_depoimento` WRITE;
/*!40000 ALTER TABLE `tbl_depoimento` DISABLE KEYS */;
INSERT INTO `tbl_depoimento` VALUES (1,1,'Tutora','A Animalis foi essencial em um momento delicado. Recebemos suporte claro, rápido e muito profissional.',1,1,'2026-07-02 17:15:05','2026-07-02 17:15:05'),(2,2,'Tutor','A equipe foi muito atenciosa com o Thor e explicou todo o atendimento com paciência.',2,1,'2026-07-02 17:15:05','2026-07-02 17:15:05'),(3,3,'Tutora','Gostei muito da estrutura da clínica e do cuidado com a minha gata.',3,1,'2026-07-02 17:15:05','2026-07-02 17:15:05');
/*!40000 ALTER TABLE `tbl_depoimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_detalhe_servico`
--

DROP TABLE IF EXISTS `tbl_detalhe_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_detalhe_servico` (
  `id_detalhe` int NOT NULL AUTO_INCREMENT,
  `id_servico` int NOT NULL,
  `titulo` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `subtitulo` varchar(180) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `conteudo` text COLLATE utf8mb4_general_ci NOT NULL,
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_detalhe` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_detalhe` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_detalhe`),
  KEY `fk_detalhe_servico_servico` (`id_servico`),
  CONSTRAINT `fk_detalhe_servico_servico` FOREIGN KEY (`id_servico`) REFERENCES `tbl_servico` (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_detalhe_servico`
--

LOCK TABLES `tbl_detalhe_servico` WRITE;
/*!40000 ALTER TABLE `tbl_detalhe_servico` DISABLE KEYS */;
INSERT INTO `tbl_detalhe_servico` VALUES (1,1,'Consultas veterinárias','Avaliação clínica completa','Na Animalis, cada consulta considera o histórico, os sintomas e a rotina do pet.',1,1,'2026-07-02 17:11:25','2026-07-02 17:11:25'),(2,1,'Prevenção e orientação','Cuidado em todas as fases da vida','Durante o atendimento, a equipe orienta tutores e indica exames quando necessário.',2,1,'2026-07-02 17:11:25','2026-07-02 17:11:25'),(3,2,'Vacinação segura','Proteção essencial para o pet','A vacinação é planejada conforme idade, histórico e rotina do animal.',1,1,'2026-07-02 17:11:25','2026-07-02 17:11:25'),(4,3,'Exames diagnósticos','Resultados para decisões mais seguras','Os exames auxiliam na identificação de alterações de saúde e no tratamento adequado.',1,1,'2026-07-02 17:11:25','2026-07-02 17:11:25'),(5,4,'Procedimentos cirúrgicos','Estrutura e equipe preparada','As cirurgias são realizadas com planejamento, cuidado e acompanhamento profissional.',1,1,'2026-07-02 17:11:25','2026-07-02 17:11:25'),(6,5,'Internação 24 horas','Monitoramento contínuo','A internação acompanha animais que precisam de cuidados intensivos ou recuperação supervisionada.',1,1,'2026-07-02 17:11:25','2026-07-02 17:11:25'),(7,6,'Emergência veterinária','Atendimento imediato','O serviço de emergência atende situações urgentes que exigem avaliação rápida.',1,1,'2026-07-02 17:11:25','2026-07-02 17:11:25');
/*!40000 ALTER TABLE `tbl_detalhe_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_faq`
--

DROP TABLE IF EXISTS `tbl_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_faq` (
  `id_faq` int NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `resposta` text COLLATE utf8mb4_general_ci NOT NULL,
  `categoria` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_faq` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_faq` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_faq`
--

LOCK TABLES `tbl_faq` WRITE;
/*!40000 ALTER TABLE `tbl_faq` DISABLE KEYS */;
INSERT INTO `tbl_faq` VALUES (1,'Quando devo vacinar meu pet?','A vacinação deve seguir a orientação do médico-veterinário, considerando idade, histórico e rotina do animal.','Vacinas',1,1,'2026-07-02 17:08:01','2026-07-02 17:08:01'),(2,'Quando procurar uma consulta?','O tutor deve procurar uma consulta quando perceber mudanças de comportamento, falta de apetite, vômitos, diarreia ou sinais de dor.','Consultas',2,1,'2026-07-02 17:08:01','2026-07-02 17:08:01'),(3,'A clínica realiza exames?','Sim. A Animalis realiza exames para auxiliar no diagnóstico e acompanhamento da saúde dos pets.','Exames',3,1,'2026-07-02 17:08:01','2026-07-02 17:08:01'),(4,'Como funciona o agendamento?','O cliente solicita o agendamento pelo site e a clínica confirma o horário pela área administrativa.','Agendamento',4,1,'2026-07-02 17:08:01','2026-07-02 17:08:01');
/*!40000 ALTER TABLE `tbl_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_funcionario`
--

DROP TABLE IF EXISTS `tbl_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_funcionario` (
  `id_funcionario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `categoria` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `crmv` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `whatsapp` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exibir_site` tinyint(1) NOT NULL DEFAULT '1',
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_funcionario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_funcionario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_funcionario`
--

LOCK TABLES `tbl_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_funcionario` DISABLE KEYS */;
INSERT INTO `tbl_funcionario` VALUES (1,'Dra. Ana Martins','Veterinária Clínica','Veterinário','CRMV-SP 12345','Especialista em clínica médica de cães e gatos.','img/equipe-ana.jpg','#','#','(11)99999-1001',1,1,1,'2026-07-02 17:07:50','2026-07-02 17:07:50'),(2,'Dr. Bruno Almeida','Veterinário Cirurgião','Veterinário','CRMV-SP 23456','Atua em cirurgias e procedimentos veterinários.','img/equipe-bruno.jpg','#','#','(11)99999-1002',1,2,1,'2026-07-02 17:07:50','2026-07-02 17:07:50'),(3,'Camila Rocha','Tecnica em Radiografia','Tecnica',NULL,'Responsável por exames radiograficos.','img/equipe-camila.jpg',NULL,NULL,'(11)99999-1003',1,3,1,'2026-07-02 17:07:50','2026-07-02 17:07:50'),(4,'Marcos Silva','Recepcionista','Recepção',NULL,'Responsável pelo atendimento inicial e organização dos agendamentos.','img/equipe-marcos.jpg',NULL,NULL,'(11)99999-1004',0,4,1,'2026-07-02 17:07:50','2026-07-02 17:07:50');
/*!40000 ALTER TABLE `tbl_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_galeria`
--

DROP TABLE IF EXISTS `tbl_galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_galeria` (
  `id_imagem` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `categoria` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_galeria`
--

LOCK TABLES `tbl_galeria` WRITE;
/*!40000 ALTER TABLE `tbl_galeria` DISABLE KEYS */;
INSERT INTO `tbl_galeria` VALUES (1,'Recepção da clínica','Ambiente preparado para receber tutores e pets com conforto.','img/galeria-recepcao.jpg','Estrutura',1,1,'2026-07-02 17:07:58','2026-07-02 17:07:58'),(2,'Sala de atendimento','Espaço equipado para consultas clínicas.','img/galeria-consultorio.jpg','Estrutura',2,1,'2026-07-02 17:07:58','2026-07-02 17:07:58'),(3,'Equipe Animalis','Profissionais dedicados ao cuidado animal.','img/galeria-equipe.jpg','Equipe',3,1,'2026-07-02 17:07:58','2026-07-02 17:07:58'),(4,'Centro de exames','Ambiente destinado a exames e diagnósticos.','img/galeria-exames.jpg','Exames',4,1,'2026-07-02 17:07:58','2026-07-02 17:07:58');
/*!40000 ALTER TABLE `tbl_galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_horario_servico`
--

DROP TABLE IF EXISTS `tbl_horario_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_horario_servico` (
  `id_horario` int NOT NULL AUTO_INCREMENT,
  `id_servico` int NOT NULL,
  `dia_semana` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `horario_inicio` time DEFAULT NULL,
  `horario_fim` time DEFAULT NULL,
  `atendimento_24h` tinyint(1) NOT NULL DEFAULT '0',
  `observacao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_horario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_horario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_horario`),
  KEY `fk_horario_servico_servico` (`id_servico`),
  CONSTRAINT `fk_horario_servico_servico` FOREIGN KEY (`id_servico`) REFERENCES `tbl_servico` (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_horario_servico`
--

LOCK TABLES `tbl_horario_servico` WRITE;
/*!40000 ALTER TABLE `tbl_horario_servico` DISABLE KEYS */;
INSERT INTO `tbl_horario_servico` VALUES (1,1,'Segunda a sexta','08:00:00','20:00:00',0,'Consultas com agendamento.',1,'2026-07-02 17:11:31','2026-07-02 17:11:31'),(2,2,'Segunda a sábado','08:00:00','18:00:00',0,'Vacinação mediante disponibilidade.',1,'2026-07-02 17:11:31','2026-07-02 17:11:31'),(3,3,'Segunda a sexta','08:00:00','18:00:00',0,'Exames com agendamento prévio.',1,'2026-07-02 17:11:31','2026-07-02 17:11:31'),(4,4,'Segunda a sexta','09:00:00','17:00:00',0,'Cirurgias mediante avaliação veterinária.',1,'2026-07-02 17:11:31','2026-07-02 17:11:31'),(5,5,'Todos os dias',NULL,NULL,1,'Internação com acompanhamento 24 horas.',1,'2026-07-02 17:11:31','2026-07-02 17:11:31'),(6,6,'Todos os dias',NULL,NULL,1,'Emergência veterinária 24 horas.',1,'2026-07-02 17:11:31','2026-07-02 17:11:31');
/*!40000 ALTER TABLE `tbl_horario_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_indicador`
--

DROP TABLE IF EXISTS `tbl_indicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_indicador` (
  `id_indicador` int NOT NULL AUTO_INCREMENT,
  `numero` int NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `icone` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_indicador` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_indicador` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_indicador`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_indicador`
--

LOCK TABLES `tbl_indicador` WRITE;
/*!40000 ALTER TABLE `tbl_indicador` DISABLE KEYS */;
INSERT INTO `tbl_indicador` VALUES (1,2700,'Tutores atendidos','icone-tutores',1,1,'2026-07-02 17:01:17','2026-07-02 17:01:17'),(2,4520,'Pacientes acompanhados','icone-pets',2,1,'2026-07-02 17:01:17','2026-07-02 17:01:17'),(3,15,'Profissionais dedicados','icone-equipe',3,1,'2026-07-02 17:01:17','2026-07-02 17:01:17'),(4,21,'Anos de experiência','icone-experiencia',4,1,'2026-07-02 17:01:17','2026-07-02 17:01:17');
/*!40000 ALTER TABLE `tbl_indicador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mensagem_contato`
--

DROP TABLE IF EXISTS `tbl_mensagem_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_mensagem_contato` (
  `id_mensagem` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assunto` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'NOVA',
  `data_envio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_mensagem` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mensagem_contato`
--

LOCK TABLES `tbl_mensagem_contato` WRITE;
/*!40000 ALTER TABLE `tbl_mensagem_contato` DISABLE KEYS */;
INSERT INTO `tbl_mensagem_contato` VALUES (1,'Juliana Costa','juliana@email.com','(11)95555-1111','Dúvida','Gostaria de saber se vocês atendem gatos idosos.','NOVA','2026-07-02 17:11:17','2026-07-02 17:11:17'),(2,'Carlos Mendes','carlos@email.com','(11)94444-2222','Sugestão','Seria interessante divulgar mais horários disponíveis no site.','NOVA','2026-07-02 17:11:17','2026-07-02 17:11:17'),(3,'Amanda Pereira','amanda@email.com','(11)93333-3333','Elogio','Fui muito bem atendida pela equipe da clínica.','LIDA','2026-07-02 17:11:17','2026-07-02 17:11:17');
/*!40000 ALTER TABLE `tbl_mensagem_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_perfil_acesso`
--

DROP TABLE IF EXISTS `tbl_perfil_acesso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_perfil_acesso` (
  `id_perfil` int NOT NULL AUTO_INCREMENT,
  `nome_perfil` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_perfil` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_perfil` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_perfil_acesso`
--

LOCK TABLES `tbl_perfil_acesso` WRITE;
/*!40000 ALTER TABLE `tbl_perfil_acesso` DISABLE KEYS */;
INSERT INTO `tbl_perfil_acesso` VALUES (1,'Administrador','Acesso completo ao sistema e ao gerenciamento do site.',1,'2026-07-02 17:11:21','2026-07-02 17:11:21'),(2,'Recepção','Acesso a mensagens, clientes e agendamentos.',1,'2026-07-02 17:11:21','2026-07-02 17:11:21'),(3,'Veterinário','Acesso aos agendamentos e informações relacionadas aos atendimentos.',1,'2026-07-02 17:11:21','2026-07-02 17:11:21'),(4,'Conteúdo','Acesso para editar banners, serviços, FAQ, galeria e dados do site.',1,'2026-07-02 17:11:21','2026-07-02 17:11:21');
/*!40000 ALTER TABLE `tbl_perfil_acesso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pet`
--

DROP TABLE IF EXISTS `tbl_pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_pet` (
  `id_pet` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `especie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `raca` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `peso` decimal(5,2) NOT NULL,
  `observacoes` text COLLATE utf8mb4_general_ci,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_pet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_pet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pet`),
  KEY `fk_pet_cliente` (`id_cliente`),
  CONSTRAINT `fk_pet_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pet`
--

LOCK TABLES `tbl_pet` WRITE;
/*!40000 ALTER TABLE `tbl_pet` DISABLE KEYS */;
INSERT INTO `tbl_pet` VALUES (1,1,'Mel','Cachorro','Golden Retriever','Fêmea','2020-05-12',25.40,'Pet dócil e vacinada.',1,'2026-07-02 17:14:50','2026-07-02 17:14:50'),(2,1,'Nina','Gato','Sem raça definida','Fêmea','2021-09-20',4.30,'Gata assustada em consultas.',1,'2026-07-02 17:14:50','2026-07-02 17:14:50'),(3,2,'Thor','Cachorro','Labrador','Macho','2019-03-10',31.80,'Histórico de alergia alimentar.',1,'2026-07-02 17:14:50','2026-07-02 17:14:50'),(4,3,'Luna','Gato','Siamês','Fêmea','2022-01-15',3.90,'Acompanhamento de rotina.',1,'2026-07-02 17:14:50','2026-07-02 17:14:50');
/*!40000 ALTER TABLE `tbl_pet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_servico`
--

DROP TABLE IF EXISTS `tbl_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_servico` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_curta` text COLLATE utf8mb4_general_ci,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ordem_exibicao` int NOT NULL DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao_servico` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_servico` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_servico`
--

LOCK TABLES `tbl_servico` WRITE;
/*!40000 ALTER TABLE `tbl_servico` DISABLE KEYS */;
INSERT INTO `tbl_servico` VALUES (1,'Consultas','Atendimento clínico completo para cães e gatos.','img/servico-consultas.jpg',1,1,'2026-07-02 17:01:22','2026-07-02 17:01:22'),(2,'Vacinas','Proteção essencial para pets em todas as fases da vida.','img/servico-vacinas.jpg',2,1,'2026-07-02 17:01:22','2026-07-02 17:01:22'),(3,'Exames','Diagnóstico rápido e seguro para auxiliar no tratamento.','img/servico-exames.jpg',3,1,'2026-07-02 17:01:22','2026-07-02 17:01:22'),(4,'Cirurgias','Procedimentos realizados com cuidado, estrutura e equipe preparada.','img/servico-cirurgias.jpg',4,1,'2026-07-02 17:01:22','2026-07-02 17:01:22'),(5,'Internação','Monitoramento contínuo para animais que precisam de cuidado intensivo.','img/servico-internacao.jpg',5,1,'2026-07-02 17:01:22','2026-07-02 17:01:22'),(6,'Emergência','Atendimento de urgência 24 horas para situações críticas.','img/servico-emergencia.jpg',6,1,'2026-07-02 17:01:22','2026-07-02 17:01:22');
/*!40000 ALTER TABLE `tbl_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario_sistema`
--

DROP TABLE IF EXISTS `tbl_usuario_sistema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuario_sistema` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `id_funcionario` int NOT NULL,
  `id_perfil` int NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `ultimo_acesso` datetime DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_usuario_sistema_funcionario` (`id_funcionario`),
  KEY `fk_usuario_sistema_perfil` (`id_perfil`),
  CONSTRAINT `fk_usuario_sistema_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `tbl_funcionario` (`id_funcionario`),
  CONSTRAINT `fk_usuario_sistema_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `tbl_perfil_acesso` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario_sistema`
--

LOCK TABLES `tbl_usuario_sistema` WRITE;
/*!40000 ALTER TABLE `tbl_usuario_sistema` DISABLE KEYS */;
INSERT INTO `tbl_usuario_sistema` VALUES (1,1,3,'ana@animalis.com.br','senha123',1,NULL,'2026-07-02 17:15:08','2026-07-02 17:15:08'),(2,2,3,'bruno@animalis.com.br','senha123',1,NULL,'2026-07-02 17:15:08','2026-07-02 17:15:08'),(3,3,3,'camila@animalis.com.br','senha123',1,NULL,'2026-07-02 17:15:08','2026-07-02 17:15:08'),(4,4,2,'recepcao@animalis.com.br','senha123',1,NULL,'2026-07-02 17:15:08','2026-07-02 17:15:08');
/*!40000 ALTER TABLE `tbl_usuario_sistema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'vet'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-29 20:09:08
