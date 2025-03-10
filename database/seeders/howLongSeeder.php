<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class howLongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $password = 'adminAeth2025'; // required to change in first login
        $roleId = 17;

        $users = [
            [
                'Lydia',
                'Hernandez',
                'dralhernandez@se-pr.edu',
                'Individual_Mensual',
                '2025-03-08 12:44:04',
                '2025-04-08 12:44:04',
                '13918',
                'active'
            ],

            [
                'Bobby',
                'Rivera',
                'riverar3@stjohns.edu',
                'Individual_Anual',
                '2025-03-06 13:17:39',
                '2026-03-06 13:17:38',
                '13870',
                'active'
            ],

            [
                'Edgardo',
                'Caraballo',
                'ecaraballome@ibpr.org',
                'Institucional_Anual',
                '2025-03-03 09:03:13',
                '',
                '13865',
                'active'
            ],

            [
                'Ernesto',
                'Castro',
                'federaciondecapellanespr@gmail.com',
                'Institucional_Mensual',
                '2025-02-21 18:09:49',
                '2025-03-21 18:09:43',
                '13821',
                'active'
            ],

            [
                'Frederick',
                'Rodriguez',
                'djfx85@gmail.com',
                'Estudiante_Anual',
                '2025-02-19 19:55:23',
                '',
                '13756',
                'active'
            ],

            [
                'WANDA',
                'ROLON',
                'NOELIA@ALABA.ORG',
                'Institucional_Anual',
                '2025-02-13 08:39:51',
                '',
                '13645',
                'active'
            ],

            [
                'Daniel',
                'De Jesus',
                'ddejesus@sedag.org',
                'Institucional_Anual',
                '2025-02-13 08:39:10',
                '',
                '13644',
                'active'
            ],

            [
                'Lisa',
                'Cummins',
                'lisacummins@urbanstrategies.us',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13587',
                'complimentary'
            ],

            [
                'Juan Ramón',
                'Mejias-Ortiz',
                'presidencia@se-pr.edu',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13586',
                'complimentary'
            ],

            [
                'Agustina',
                'Luvis Nunez',
                'draluvis@se-pr.edu',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13585',
                'complimentary'
            ],

            [
                'Jose',
                'Cortes Jr.',
                'josecortesjr@nadadventist.org',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13584',
                'complimentary'
            ],

            [
                'Gerardo',
                'Oudri Varela',
                'gerardooudri@nadadventist.org',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13583',
                'complimentary'
            ],

            [
                'Gabriel',
                'Salguero',
                'salguerog@gmail.com',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13582',
                'complimentary'
            ],

            [
                'Jeanette',
                'Salguero',
                'salguerojvs@gmail.com',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13581',
                'complimentary'
            ],

            [
                'Michael',
                'Messner',
                'mike@mobiusgp.com',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13580',
                'complimentary'
            ],

            [
                'Nick R',
                'Garza',
                'drnickgarza@gmail.com',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13579',
                'complimentary'
            ],

            [
                'Antonio',
                'Cediel',
                'Antonio.cediel@gmail.com',
                'Institucional_Anual',
                '2025-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '13578',
                'complimentary'
            ],

            [
                'Anthony',
                'Guillén',
                'aguillen@episcopalchurch.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13577',
                'complimentary'
            ],

            [
                'Carlos L',
                'Malave',
                'revmalave@lcnn.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13576',
                'complimentary'
            ],

            [
                'Gary E',
                'Vazquez',
                'gevazquez7@gmail.com',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13575',
                'complimentary'
            ],

            [
                'Jonathan',
                'Garcia Rodriguez',
                'jgr.jonathan@gmail.com',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13574',
                'complimentary'
            ],

            [
                'Christine Rose',
                'Tamara',
                'ctamara@hispanicaccess.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13573',
                'complimentary'
            ],

            [
                'Luke',
                'Argleben',
                'luke@hispanicaccess.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13572',
                'complimentary'
            ],

            [
                'Lydia E.',
                'Munoz',
                'lmunoz@umcmission.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13571',
                'complimentary'
            ],

            [
                'Melanie',
                'Ramos',
                'mramos1@foursquare.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13570',
                'complimentary'
            ],

            [
                'Martin',
                'Ruarte',
                'mruarte@foursquare.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13569',
                'complimentary'
            ],

            [
                'Anthony',
                'Ramos',
                'aramos@esperanza.us',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13568',
                'complimentary'
            ],

            [
                'Rubén',
                'Ortiz',
                'rortiz@esperanza.us',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13567',
                'complimentary'
            ],

            [
                'Bruno',
                'Molina',
                'bmolina@rednbh.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13566',
                'complimentary'
            ],

            [
                'Jesse',
                'Rincones',
                'jesse@convencionbautista.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13565',
                'complimentary'
            ],

            [
                'Angel B.',
                'Marcial Jr.',
                'abmarcial1@gmail.com',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13564',
                'complimentary'
            ],

            [
                'Angel',
                'Marcial',
                'amarcial25@hotmail.com',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13563',
                'complimentary'
            ],

            [
                'Ivan',
                'Marti',
                'martii@cmalliance.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13562',
                'complimentary'
            ],

            [
                'Jorge',
                'Cuevas',
                'cuevasj@cmalliance.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13561',
                'complimentary'
            ],

            [
                'Dennis',
                'Rivera',
                'drivera@ag.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13560',
                'complimentary'
            ],

            [
                'Andy',
                'Smith',
                'asmith@cddcag.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13559',
                'complimentary'
            ],

            [
                'Abner',
                'Cotto-Bonilla',
                'abner.cotto-bonilla@abhms.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13558',
                'complimentary'
            ],

            [
                'Marie',
                'Onwubuariri',
                'marie.onwubuariri@abhms.org',
                'Institucional_Anual',
                '2025-01-28 00:00:00',
                '2026-01-28 00:00:00',
                '13557',
                'complimentary'
            ],

            [
                'Nereida',
                'Nales Perez',
                'dnnales@gmail.com',
                'Individual_Anual',
                '2025-01-28 00:00:00',
                '2026-01-16 00:00:00',
                '13554',
                'active'
            ],

            [
                'LABI College',
                'LABI College',
                'bfoley@labi.edu',
                'Institucional_Anual',
                '2025-01-28 08:37:39',
                '',
                '13547',
                'active'
            ],

            [
                'Anneris',
                'Albizu Rivera',
                'presidentemizpa.575@gmail.com',
                'Institucional_Anual',
                '2025-01-23 16:29:25',
                '',
                '13519',
                'active'
            ],

            [
                'Hiram',
                'Quiles Rivera',
                'hiramquiles8@gmail.com',
                'Estudiante_Anual',
                '2025-01-23 16:28:19',
                '',
                '13518',
                'active'
            ],

            [
                'IVAN',
                'GIL',
                'ivangil2023@gmail.com',
                'Estudiante_Anual',
                '2025-01-23 16:27:18',
                '',
                '13517',
                'active'
            ],

            [
                'Maria Eugenia',
                'Martinez',
                'dramarymartinez@gmail.com',
                'Institucional_Anual',
                '2025-01-23 16:26:19',
                '',
                '13516',
                'active'
            ],

            [
                'TOMAS',
                'ALVAREZ',
                'talvarez@nnu.edu',
                'Institucional_Anual',
                '2025-01-17 15:57:52',
                '',
                '13495',
                'active'
            ],

            [
                'Rev.',
                'Arroyo',
                'garroyo@gcorr.org',
                'Institucional_Anual',
                '2024-12-23 12:00:39',
                '',
                '13389',
                'active'
            ],

            [
                'Héctor',
                'Falú Cruz',
                'hfalu2002@yahoo.com',
                'Individual_Anual',
                '2024-12-13 13:56:48',
                '2025-12-13 13:56:49',
                '13266',
                'active'
            ],

            [
                'Gretchen',
                'Avila-Torres',
                'gretchen.avila-torres@westernsem.edu',
                'Individual_Anual',
                '2024-12-09 17:40:26',
                '2025-12-09 17:40:27',
                '13246',
                'active'
            ],

            [
                'Universidad Teologica',
                'del Caribe',
                'decanoadministracion@utcpr.edu',
                'Institucional_Anual',
                '2024-11-20 00:00:00',
                '2025-11-20 00:00:00',
                '13157',
                'active'
            ],

            [
                'Carmen S.',
                'Toro Vélez',
                'cstoro2002@yahoo.com',
                'Individual_Anual',
                '2024-11-16 00:00:00',
                '2025-11-16 00:00:00',
                '13156',
                'active'
            ],

            [
                'Noelia',
                'Rodríguez Merced',
                'pastoranoeliar@gmail.com',
                'Individual_Anual',
                '2024-11-16 00:00:00',
                '2025-11-16 00:00:00',
                '13155',
                'active'
            ],

            [
                'Lydia',
                'Rivas Balado',
                'pastoralrivas@gmail.com',
                'Individual_Anual',
                '2024-11-16 00:00:00',
                '2025-11-16 00:00:00',
                '13154',
                'active'
            ],

            [
                'María E.',
                'Calderón',
                'mecalderon8288@gmail.com',
                'Individual_Anual',
                '2024-11-16 00:00:00',
                '2025-11-16 00:00:00',
                '13153',
                'active'
            ],

            [
                'Rosalba',
                'Vélez Pizarro',
                'rvelez@ibcarolina.org',
                'Individual_Anual',
                '2024-11-14 00:00:00',
                '2025-11-14 00:00:00',
                '13152',
                'active'
            ],

            [
                'Elaine',
                'Hawley',
                'ehawley@united.edu',
                'Institucional_Anual',
                '2024-11-18 15:56:30',
                '',
                '13139',
                'active'
            ],

            [
                'Seminario Internacional',
                'Teologico Bautista Argentina',
                'sitb@sitb.edu.ar',
                'Institucional_Anual',
                '2024-10-18 00:00:00',
                '2025-10-18 00:00:00',
                '13028',
                'active'
            ],

            [
                'Universidad',
                'Bautista',
                'rectoria@unibautista.edu.co',
                'Individual_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13027',
                'active'
            ],

            [
                'Nephtali',
                'Marrero',
                'comunicaciones.mb@yahoo.com',
                'Individual_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13025',
                'active'
            ],

            [
                'Ministerio',
                'Betel',
                'ministeriobetel@aol.com',
                'Institucional_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13023',
                'active'
            ],

            [
                'Colegio Teologico',
                'Biblos',
                'oficina@colegiobiblos.org',
                'Institucional_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13022',
                'active'
            ],

            [
                'Francisco Pablo',
                'Fortuna',
                'franciscopablofortuna@gmail.com',
                'Individual_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13020',
                'active'
            ],

            [
                'Iglesia Bautista',
                'Casa de Dios',
                'iglesiabautistacasadedios777@gmail.com',
                'Institucional_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13018',
                'active'
            ],

            [
                'American Baptist',
                'Theological Center',
                'abtceducation@gmail.com',
                'Institucional_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '13017',
                'active'
            ],

            [
                'Nathaniel',
                'Ochoa',
                'natochoa@fountainoftruth.com',
                'Institucional_Anual',
                '2024-10-28 15:45:59',
                '',
                '12983',
                'active'
            ],

            [
                'Alfonso Arturo',
                'Sánchez Ramos',
                'alfonso.sanchezbbi@gmail.com',
                'Individual_Anual',
                '2024-10-28 15:16:52',
                '2025-10-28 15:16:53',
                '12982',
                'active'
            ],

            [
                'Deborah Enid',
                'Ortiz',
                'd.e.ortiz-rivera@emory.edu',
                'Individual_Anual',
                '2024-10-21 10:35:20',
                '2025-10-21 10:35:15',
                '12967',
                'active'
            ],

            [
                'Raul',
                'Lopez',
                'raul@clie.es',
                'Individual_Anual',
                '2024-10-10 00:00:00',
                '2025-10-09 00:00:00',
                '12932',
                'active'
            ],

            [
                'Alfonso',
                'Triviño',
                'alfonso.trivino@clie.es',
                'Individual_Anual',
                '2024-10-06 00:00:00',
                '2025-10-05 00:00:00',
                '12788',
                'active'
            ],

            [
                'Reynaldo',
                'Dominguez',
                'RADOMINGUEZ2006@YAHOO.COM',
                'Individual_Mensual',
                '2024-10-05 19:39:26',
                '2024-11-05 19:40:17',
                '12730',
                'expired'
            ],

            [
                'Wilmer',
                'Estrada',
                'wilmer.estrada@asburyseminary.edu',
                'Individual_Mensual',
                '2024-10-03 10:07:07',
                '2024-11-03 10:09:53',
                '12677',
                'expired'
            ],

            [
                'Synia María',
                'Rodríguez Morales',
                'syniamaria@gmail.com',
                'Individual_Anual',
                '2024-10-02 14:29:00',
                '2025-10-02 14:28:55',
                '12673',
                'active'
            ],

            [
                'Eliezer E.',
                'Burgos Rosado',
                'burgos.morovis@gmail.com',
                'Individual_Anual',
                '2024-10-02 14:08:28',
                '2025-10-02 14:08:23',
                '12670',
                'active'
            ],

            [
                'Miguel O',
                'Alvarez',
                'migalvarez@gmail.com',
                'Individual_Anual',
                '2024-10-02 09:41:59',
                '2025-10-02 09:41:54',
                '12665',
                'active'
            ],

            [
                'Nathan J.',
                'Bonilla',
                'Nathan.bonilla@mbible.org',
                'Institucional_Anual',
                '2024-08-01 00:00:00',
                '2025-08-01 00:00:00',
                '12641',
                'active'
            ],

            [
                'Juan Jose',
                'Barreda Toscano',
                'jjbt.amauta@gmail.com',
                'Individual_Anual',
                '2024-09-17 00:00:00',
                '2025-09-17 00:00:00',
                '12520',
                'active'
            ],

            [
                'Teofilo J.',
                'Aguillon',
                'olivia.aguillon1010@gmail.com',
                'Institucional_Mensual',
                '2024-09-18 14:00:10',
                '2024-10-18 14:01:35',
                '12518',
                'expired'
            ],

            [
                'Maria',
                'Lopez',
                'cenetpre@gmail.com',
                'Institucional_Anual',
                '2024-09-16 07:53:09',
                '',
                '12450',
                'active'
            ],

            [
                'Ruben',
                'Ortiz',
                'ruben@rubenortiz.com',
                'Individual_Anual',
                '2024-09-12 00:00:00',
                '2025-09-11 00:00:00',
                '12444',
                'active'
            ],

            [
                'Martin',
                'Harris',
                'mharris@labi.edu',
                'Individual_Anual',
                '2024-09-12 00:00:00',
                '2025-09-13 00:00:00',
                '12443',
                'active'
            ],

            [
                'Agustin',
                'Quiles',
                'agustinquiles3@gmail.com',
                'Individual_Anual',
                '2024-09-12 00:00:00',
                '2025-09-11 00:00:00',
                '12442',
                'active'
            ],

            [
                'Maria Tereza',
                'Davila',
                'davilam@merrimack.edu',
                'Individual_Anual',
                '2024-09-12 00:00:00',
                '2025-09-13 00:00:00',
                '12441',
                'active'
            ],

            [
                'Xyomara',
                'b',
                'xreboyras@floridacbf.org',
                'Individual_Anual',
                '2024-09-11 00:00:00',
                '2025-09-10 00:00:00',
                '12438',
                'active'
            ],

            [
                'Hugo',
                'Aldana Jr',
                'haldana@lifepacific.edu',
                'Individual_Anual',
                '2024-09-05 12:37:34',
                '2025-09-05 12:37:35',
                '12406',
                'active'
            ],

            [
                'Alma',
                'Zamudio',
                'almazamudio69@icloud.com',
                'Individual_Anual',
                '2024-09-05 01:30:23',
                '2025-09-05 01:28:28',
                '12396',
                'active'
            ],

            [
                'Emma',
                'Escobar',
                'emma.escobar@garrett.edu',
                'Individual_Anual',
                '2024-09-02 00:00:00',
                '2025-09-01 00:00:00',
                '12379',
                'active'
            ],

            [
                'Raquel',
                'Toledo',
                'raqueltoledo@fuller.edu',
                'Individual_Anual',
                '2024-08-29 00:00:00',
                '2025-08-28 00:00:00',
                '12376',
                'active'
            ],

            [
                'MOISES',
                'ROJO',
                'visiontheological@gmail.com',
                'Institucional_Anual',
                '2024-08-26 01:43:03',
                '',
                '12369',
                'active'
            ],

            [
                'Samuel',
                'Pagan',
                'drsamuelpagan@aol.com',
                'Individual_Anual',
                '2024-08-21 00:00:00',
                '2025-08-20 00:00:00',
                '12361',
                'active'
            ],

            [
                'David',
                'Vasquez-Levy',
                'dvasquez@psr.edu',
                'Individual_Mensual',
                '2024-08-21 00:00:00',
                '2025-08-25 00:00:00',
                '12360',
                'active'
            ],

            [
                'Danny',
                'Roman',
                'dannyroman@live.com',
                'Individual_Anual',
                '2024-08-21 00:00:00',
                '2025-08-20 00:00:00',
                '12359',
                'active'
            ],

            [
                'Grace',
                'Martino',
                'gracemartino14@gmail.com',
                'Individual_Anual',
                '2024-08-21 00:00:00',
                '2025-08-21 00:00:00',
                '12358',
                'active'
            ],

            [
                'Lucila',
                'Crena',
                'lcrena@wesleyseminary.edu',
                'Individual_Anual',
                '2024-08-21 00:00:00',
                '2025-08-20 00:00:00',
                '12356',
                'active'
            ],

            [
                'Elizabeth',
                'Tamez',
                'elizabeth.tamez@ng3web.org',
                'Individual_Anual',
                '2024-08-21 00:00:00',
                '2025-08-20 00:00:00',
                '12355',
                'active'
            ],

            [
                'Omar',
                'Palafox',
                'omar.palafox@acu.edu',
                'Individual_Anual',
                '2024-08-21 00:00:00',
                '2025-08-20 00:00:00',
                '12352',
                'active'
            ],

            [
                'Milca',
                'Rivera',
                'milca_rivera1@baylor.edu',
                'Estudiante_Anual',
                '2024-08-14 14:16:23',
                '',
                '12288',
                'active'
            ],

            [
                'Idia',
                'Piacentini',
                'ipiacentini@div.duke.edu',
                'Institucional_Anual',
                '2024-08-13 00:00:00',
                '2025-08-13 00:00:00',
                '12241',
                'active'
            ],

            [
                'Ruben',
                'Isaac',
                'risaac_2802@yahoo.com',
                'Estudiante_Anual',
                '2024-08-06 19:18:10',
                '',
                '12062',
                'active'
            ],

            [
                'Edwin',
                'Perez Jr',
                'edwinperezjr1@gmail.com',
                'Individual_Mensual',
                '2024-08-05 09:51:28',
                '2024-09-05 09:52:01',
                '12037',
                'expired'
            ],

            [
                'Orlando',
                'Morales Cintron',
                'omorales1@gordonconwell.edu',
                'Estudiante_Anual',
                '2024-07-30 15:54:11',
                '',
                '12033',
                'active'
            ],

            [
                'Joseph',
                'Ocasio',
                'jocasio@gracechristian.edu',
                'Individual_Anual',
                '2024-07-22 10:00:19',
                '2025-07-22 10:00:14',
                '11979',
                'active'
            ],

            [
                'Gabriela',
                'Tijerina-Pike',
                'gabriela@calvinseminary.edu',
                'Individual_Anual',
                '2024-07-19 16:31:54',
                '2025-07-19 16:31:50',
                '11976',
                'active'
            ],

            [
                'Jeffrey',
                'Bamaca',
                'jeffrey.bamaca@restla.org',
                'Institucional_Anual',
                '2024-07-18 16:20:51',
                '',
                '11949',
                'active'
            ],

            [
                'Fernando',
                'Cascante',
                'cascantefa@gmail.com',
                'Individual_Anual',
                '2024-07-18 12:11:02',
                '2025-07-18 12:10:58',
                '11942',
                'active'
            ],

            [
                'Jorge',
                'Rodriguez',
                'informacionrhema@gmail.com',
                'Institucional_Anual',
                '2024-07-15 14:00:57',
                '',
                '11678',
                'active'
            ],

            [
                'EFRAIN',
                'TORRES',
                'anjez77@gmail.com',
                'Institucional_Anual',
                '2024-07-15 13:58:57',
                '',
                '11677',
                'active'
            ],

            [
                'Lydia',
                'Pagan',
                'dralydiapagan@gmail.com',
                'Institucional_Anual',
                '2024-07-15 13:56:05',
                '',
                '11676',
                'active'
            ],

            [
                'Priscilla',
                'Rodriguez',
                'prodriquez@mccormick.edu',
                'Institucional_Anual',
                '2024-07-15 13:55:23',
                '',
                '11675',
                'active'
            ],

            [
                'Karen',
                'Figueroa',
                'akarenfig@gmail.com',
                'Individual_Mensual',
                '2024-07-11 13:55:05',
                '2025-07-11 00:00:00',
                '11633',
                'active'
            ],

            [
                'Priscilla',
                'Rodriguez',
                'prodriquez@mccormick.edu',
                'Individual_Anual',
                '2024-07-10 16:01:10',
                '2025-07-10 16:01:05',
                '11623',
                'active'
            ],

            [
                'Glorie',
                'Acevedo Rosa',
                'glorieacevedorosa@yahoo.com',
                'Individual_Anual',
                '2024-07-09 19:51:57',
                '2025-07-09 19:51:52',
                '11565',
                'active'
            ],

            [
                'Luis',
                'Merced Padilla',
                'luismerced7@gmail.com',
                'Estudiante_Anual',
                '2024-07-06 18:51:45',
                '',
                '11553',
                'active'
            ],

            [
                'Israel',
                'Figueroa',
                'israelfigueroapastrana@gmail.com',
                'Individual_Anual',
                '2024-07-06 15:21:33',
                '2025-07-06 15:21:28',
                '11550',
                'active'
            ],

            [
                'Life Pacific',
                'University',
                'academics@lifepacific.edu',
                'Institucional_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11547',
                'active'
            ],

            [
                'Ramona',
                'Acevedo',
                'ramonaacevedo43@gmail.com',
                'Estudiante_Anual',
                '2024-07-03 17:50:18',
                '',
                '11542',
                'active'
            ],

            [
                'Harold',
                'Segura',
                'harold.segura@gmail.com',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11390',
                'active'
            ],

            [
                'Oscar',
                'Garcia-Johnson',
                'ogarcia-johnson@fuller.edu',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11389',
                'active'
            ],

            [
                'Brenda Berenice',
                'Noriega-Flores',
                'noriegab@bc.edu',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11388',
                'active'
            ],

            [
                'Steve',
                'Gober',
                'steve.gober@asburyseminary.edu',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11387',
                'active'
            ],

            [
                'Jaqueline',
                'Rojas',
                'jackie.rojas@emory.edu',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11386',
                'active'
            ],

            [
                'Kelmadis',
                'Pérez-Rivera',
                'kelmadis@gmail.com',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11385',
                'active'
            ],

            [
                'Jayson',
                'Aponte Hernandez',
                'jaysonaponte@gmail.com',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11384',
                'active'
            ],

            [
                'Javier',
                'Viera Muñiz',
                'javier.viera@garrett.edu',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11383',
                'active'
            ],

            [
                'Julio',
                'Vargas Vidal',
                'jvargas@opto.inter.edu',
                'Individual_Anual',
                '2024-06-28 15:09:13',
                '2025-06-28 15:09:13',
                '11382',
                'active'
            ],

            [
                'Yenny',
                'Delgado',
                'ydelgado@publicatheology.org',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '11380',
                'active'
            ],

            [
                'Marielys Sánchez',
                'Ramirez',
                'agendamarielys@gmail.com',
                'Individual_Anual',
                '2024-06-01 00:00:00',
                '2025-06-30 00:00:00',
                '11378',
                'active'
            ],

            [
                'Marta Noemi',
                'Luna',
                'mluna@aeth.org',
                'Individual_Anual',
                '2024-06-27 00:00:00',
                '2026-06-26 00:00:00',
                '11376',
                'active'
            ],

            [
                'Sergio',
                'Navarrete',
                'NavarreteS@Evangel.Edu',
                'Institucional_Anual',
                '2024-06-26 00:00:00',
                '2025-06-26 00:00:00',
                '11367',
                'active'
            ],

            [
                'Carolina',
                'Heraldez',
                'caritoheraldez@fuller.edu',
                'Estudiante_Anual',
                '2024-06-25 15:26:26',
                '2025-06-25 15:26:26',
                '11340',
                'active'
            ],

            [
                'Philip',
                'Wingeierrayo',
                'pwingeier@wesleyseminary.edu',
                'Individual_Mensual',
                '2024-06-25 15:21:16',
                '2025-03-19 00:00:00',
                '11338',
                'active'
            ],

            [
                'Daniel',
                'Ruarte',
                'druarte@lifepacific.edu',
                'Institucional_Anual',
                '2024-06-25 07:35:11',
                '2025-06-25 07:35:11',
                '11312',
                'active'
            ],

            [
                'John A.',
                'Ortiz Velez',
                'johnorti92@gmail.com',
                'Individual_Mensual',
                '2024-06-24 15:38:45',
                '2024-07-24 15:39:49',
                '11311',
                'expired'
            ],

            [
                'Esteban',
                'González Doble',
                'egonzalezdoble59@gmail.com',
                'Individual_Anual',
                '2024-06-22 16:22:09',
                '2025-06-22 16:22:09',
                '11304',
                'active'
            ],

            [
                'Oscar',
                'LaSalle',
                'oscarlasalle@VCCleadership.org',
                'Institucional_Mensual',
                '2024-06-21 19:32:13',
                '2024-07-21 19:32:21',
                '11302',
                'expired'
            ],

            [
                'Javier G.',
                'Velasquez',
                'javie@bild.org',
                'Estudiante_Anual',
                '2024-06-20 17:49:10',
                '2025-06-20 17:49:10',
                '11299',
                'active'
            ],

            [
                'Dr. Tito',
                'Sandoval',
                'sandovaltito@icloud.com',
                'Individual_Anual',
                '2024-06-18 00:21:09',
                '2025-06-18 00:21:09',
                '11193',
                'active'
            ],

            [
                'Kari',
                'Velez',
                'ksv032388@gmail.com',
                'Estudiante_Anual',
                '2024-06-14 08:59:43',
                '2025-06-14 08:59:43',
                '11186',
                'active'
            ],

            [
                'Jesse',
                'Gonzalez',
                'educatingourpeople@gmail.com',
                'Institucional_Anual',
                '2024-06-10 08:15:46',
                '2025-06-10 08:15:46',
                '11093',
                'active'
            ],

            [
                'Johnny',
                'Ramirez',
                'ramirez-johnson@fuller.edu',
                'Individual_Anual',
                '2024-06-05 18:06:00',
                '2025-06-05 18:06:00',
                '11048',
                'active'
            ],

            [
                'sacha',
                'thompson',
                'sacha.thompson2u@gmail.com',
                'Individual_Mensual',
                '2024-06-03 11:51:06',
                '2024-07-03 11:55:59',
                '10753',
                'expired'
            ],

            [
                'Adaliz',
                'Goldilla',
                'adaliz@unilimi.org',
                'Estudiante_Anual',
                '2024-06-02 20:44:23',
                '2025-06-02 20:44:23',
                '10652',
                'active'
            ],

            [
                'Georgia Tehological',
                'University',
                'institutotdg@gmail.com',
                'Institucional_Anual',
                '2024-05-31 09:45:04',
                '2025-05-31 09:45:04',
                '10648',
                'active'
            ],

            [
                'javier',
                'kosacki',
                'javierkosacki@hotmail.com',
                'Institucional_Anual',
                '2024-05-31 09:42:28',
                '2025-05-31 09:42:28',
                '10647',
                'active'
            ],

            [
                'Oscar',
                'Holzmeister',
                'oscar.h@chet.org',
                'Individual_Anual',
                '2024-05-23 22:36:28',
                '2025-05-23 22:36:28',
                '10531',
                'active'
            ],

            [
                'Wilfredo',
                'Canales',
                'wcanales52@gmail.com',
                'Individual_Anual',
                '2024-05-22 12:27:04',
                '2025-05-22 12:27:04',
                '10528',
                'active'
            ],

            [
                'Maribel',
                'Zacapa Arias',
                'maribelzacapaarias@fuller.edu',
                'Individual_Mensual',
                '2024-05-22 12:12:52',
                '2024-06-22 12:12:57',
                '10526',
                'expired'
            ],

            [
                'Lymar',
                'Sola',
                'lsola@urbanstrategies.us',
                'Institucional_Anual',
                '2021-05-13 00:00:00',
                '',
                '10162',
                'complimentary'
            ],

            [
                'javier',
                'kosacki',
                'javierkosacki@hotmail.com',
                'Individual_Anual',
                '2024-05-07 01:21:19',
                '2025-05-07 01:21:19',
                '9901',
                'active'
            ],

            [
                'Carla',
                'Works',
                'deansoffice@wesleyseminary.edu',
                'Institucional_Anual',
                '2024-04-24 00:00:00',
                '2025-04-24 00:00:00',
                '9898',
                'active'
            ],

            [
                'Brent',
                'Peterson',
                'bpeterson@nnu.edu',
                'Institucional_Anual',
                '2024-04-23 00:00:00',
                '2025-04-23 00:00:00',
                '9897',
                'active'
            ],

            [
                'Karina',
                'Aragon-Buchanan',
                'karina.aragon-buchanan@emory.edu',
                'Institucional_Anual',
                '2024-04-24 00:00:00',
                '2025-04-24 00:00:00',
                '9896',
                'active'
            ],

            [
                'Luis',
                'Pina',
                'interacademyofchaplaincy@gmail.com',
                'Individual_Anual',
                '2024-04-22 00:00:00',
                '2025-04-22 00:00:00',
                '9895',
                'active'
            ],

            [
                'Luis',
                'Pina',
                'interacademyofchaplaincy@gmail.com',
                'Institucional_Anual',
                '2024-04-22 00:00:00',
                '2025-04-22 00:00:00',
                '9894',
                'active'
            ],

            [
                'Felipe',
                'Martinez',
                'bethesda78@hotmail.com',
                'Individual_Anual',
                '2024-05-02 14:32:09',
                '2025-05-02 14:32:09',
                '9893',
                'active'
            ],

            [
                'Jose',
                'Flores Nunez',
                'joseflorespr1@gmail.com',
                'Institucional_Mensual',
                '2024-05-01 17:42:36',
                '2024-06-30 00:01:48',
                '9891',
                'expired'
            ],

            [
                'Yajaira',
                'Ruiz',
                'ariajay7@gmail.com',
                'Estudiante_Anual',
                '2024-04-30 10:32:52',
                '2025-04-30 10:32:53',
                '9727',
                'active'
            ],

            [
                'Zaida Maldonado',
                'Perez',
                'zaidamp1@gmail.com',
                'Individual_Anual',
                '2024-04-25 10:20:32',
                '2025-04-25 10:20:32',
                '9689',
                'active'
            ],

            [
                'Victor',
                'Hernandez',
                'victorh@gtcohio.org',
                'Individual_Anual',
                '2024-04-19 09:30:05',
                '2025-04-19 09:30:05',
                '9629',
                'active'
            ],

            [
                'Silvia Georgina',
                'Rodriguez Guzman',
                'gina@agapeobc.org',
                'Estudiante_Anual',
                '2024-04-09 12:32:36',
                '2025-04-09 12:32:36',
                '9592',
                'active'
            ],

            [
                'Daniel',
                'Montañez',
                'dmontanez2015@aol.com',
                'Estudiante_Anual',
                '2024-04-03 06:25:23',
                '2025-04-03 06:25:23',
                '9449',
                'active'
            ],

            [
                'Carmen C',
                'Adames Vazquez',
                'cadames@ibcarolina.org',
                'Individual_Anual',
                '2024-01-29 00:00:00',
                '2026-01-29 00:00:00',
                '9180',
                'active'
            ],

            [
                'Oscar',
                'Merlo',
                'oscarmerlo@mac.com',
                'Institucional_Anual',
                '2024-01-30 00:00:00',
                '2025-01-30 00:00:19',
                '9178',
                'expired'
            ],

            [
                'Danny',
                'Santiago',
                'pastordannysantiago@yahoo.com',
                'Individual_Anual',
                '2024-03-27 00:00:00',
                '2025-03-18 00:00:00',
                '9177',
                'active'
            ],

            [
                'Aracelis',
                'Haye',
                'aracelisvazquezhaye@gmail.com',
                'Individual_Anual',
                '2024-03-19 15:31:04',
                '2025-03-19 15:31:04',
                '9111',
                'active'
            ],

            [
                'Leuyin',
                'Garcia',
                'leuyinministry@gmail.com',
                'Institucional_Anual',
                '2024-03-04 00:00:00',
                '2025-03-04 00:00:13',
                '9090',
                'expired'
            ],

            [
                'Noreen',
                'Weston',
                'smefdirector@wesleyan.org',
                'Institucional_Anual',
                '2024-03-14 13:31:21',
                '2025-03-14 13:31:21',
                '9089',
                'active'
            ],

            [
                'Hector',
                'De Ycaza',
                'usameh@churchofgod.org',
                'Individual_Anual',
                '2024-03-14 13:24:04',
                '2025-03-14 13:24:04',
                '9088',
                'active'
            ],

            [
                'DR JULIAN',
                'DEL ROSARIO',
                'social@tiuusa.org',
                'Institucional_Anual',
                '2024-03-14 13:23:24',
                '2025-03-14 13:23:24',
                '9087',
                'active'
            ],

            [
                'RAFAEL',
                'CANDELARIA',
                'rafael.candelaria@stdpr.org',
                'Institucional_Anual',
                '2024-03-14 11:14:46',
                '2025-03-14 11:14:46',
                '9085',
                'active'
            ],

            [
                'Eli',
                'Jimenez',
                'seminariobiblicomasada@gmail.com',
                'Institucional_Anual',
                '2024-03-14 11:14:01',
                '2025-03-14 11:14:01',
                '9084',
                'active'
            ],

            [
                'Debra',
                'Holder',
                'bursar@bhcarroll.edu',
                'Institucional_Anual',
                '2024-03-14 11:12:34',
                '2025-03-14 11:12:34',
                '9083',
                'active'
            ],

            [
                'Javier',
                'Gómez',
                'jgomez@laalianzapr.org',
                'Institucional_Anual',
                '2024-03-14 11:11:43',
                '2025-03-14 11:11:43',
                '9082',
                'active'
            ],

            [
                'Ramon',
                'Rivera',
                'rarivera@anderson.edu',
                'Institucional_Anual',
                '2024-03-14 11:10:38',
                '2026-03-14 11:10:38',
                '9081',
                'active'
            ],

            [
                'Omar',
                'Palafox',
                'comhis3@acu.edu',
                'Institucional_Anual',
                '2024-03-14 11:08:59',
                '2025-03-14 11:08:59',
                '9080',
                'active'
            ],

            [
                'Lori',
                'Tapia',
                'somosuno@cpohm.disciples.org',
                'Institucional_Anual',
                '2024-03-14 11:08:21',
                '2025-03-14 11:08:21',
                '9079',
                'active'
            ],

            [
                'Johnny',
                'Vega',
                'johnny.vega@westernsem.edu',
                'Institucional_Anual',
                '2024-03-14 11:06:16',
                '2025-03-14 11:06:16',
                '9078',
                'active'
            ],

            [
                'Rebecca',
                'Eberhart',
                'becky.eberhart@garrett.edu',
                'Institucional_Anual',
                '2024-03-14 11:05:46',
                '2025-03-14 11:05:46',
                '9077',
                'active'
            ],

            [
                'José Omar',
                'Palafox',
                'omarpalafox@fuller.edu',
                'Institucional_Anual',
                '2024-03-12 00:00:00',
                '2025-03-12 00:00:00',
                '9059',
                'active'
            ],

            [
                'SILVIA',
                'TIZNADO-SMITH',
                'buenvivircpe@gmail.com',
                'Institucional_Anual',
                '2024-03-04 00:00:00',
                '2026-03-04 00:00:00',
                '9057',
                'active'
            ],

            [
                'Coralys',
                'Santos Saldaña',
                'santoscoralys@gmail.com',
                'Estudiante_Anual',
                '2024-03-05 22:25:49',
                '2025-03-05 22:31:50',
                '8910',
                'expired'
            ],

            [
                'Miguel',
                'Acosta',
                'miguel.acosta24@hotmail.com',
                'Institucional_Mensual',
                '2024-03-01 12:01:50',
                '2025-03-01 00:00:40',
                '8906',
                'expired'
            ],

            [
                'Mayra',
                'Coello Soto',
                'mayracoello26@gmail.com',
                'Estudiante_Mensual',
                '2024-02-29 21:15:45',
                '2025-02-28 00:02:18',
                '8904',
                'expired'
            ],

            [
                'Roberto',
                'Dieppa Báez',
                'ibcanovanas@yahoo.com',
                'Institucional_Anual',
                '2024-02-27 00:00:00',
                '2025-02-27 00:00:22',
                '8890',
                'expired'
            ],

            [
                'Jorge',
                'Fuentes',
                'fuentesccu@hotmail.com',
                'Institucional_Mensual',
                '2024-02-28 14:49:55',
                '2025-02-28 00:02:19',
                '8887',
                'expired'
            ],

            [
                'Edgardo',
                'Fuentes',
                'edgardojavier@live.com',
                'Individual_Anual',
                '2024-02-15 00:00:00',
                '2025-02-14 00:00:08',
                '8855',
                'expired'
            ],

            [
                'Benjamín',
                'Santana',
                'Bensantana47@yahoo.com',
                'Individual_Anual',
                '2024-02-15 00:00:00',
                '2025-02-14 00:00:07',
                '8854',
                'expired'
            ],

            [
                'Michelle',
                'Carattini-Ramsundar',
                'pastoramicheller@gmail.com',
                'Individual_Anual',
                '2024-02-20 11:23:04',
                '2024-12-17 00:00:00',
                '8814',
                'expired'
            ],

            [
                'Thelma',
                'Herrera Flores',
                'hoidouloi@yahoo.com',
                'Individual_Mensual',
                '2024-02-01 19:14:10',
                '2024-06-30 00:01:49',
                '8544',
                'expired'
            ],

            [
                'Daniela',
                'Orozco Reus',
                'dani.moreus@gmail.com',
                'Institucional_Mensual',
                '2024-01-30 12:55:36',
                '2025-01-29 00:00:16',
                '8512',
                'expired'
            ],

            [
                'Jessica',
                'Lugo Melendez',
                'jlugo@aeth.org',
                'Individual_Anual',
                '2024-01-29 13:58:55',
                '2025-09-13 00:00:00',
                '8509',
                'active'
            ],

            [
                'Jesús',
                'Semidey',
                'jesussemidey@me.com',
                'Institucional_Mensual',
                '2024-01-29 13:06:16',
                '2024-02-29 13:06:18',
                '8507',
                'expired'
            ],

            [
                'RUTH',
                'CLOWATER',
                'RUTH@SIGAMINISTRIES.ORG',
                'Individual_Anual',
                '2024-01-29 09:23:49',
                '2025-01-29 09:24:39',
                '8488',
                'expired'
            ],

            [
                'Daniel',
                'Rivera-Rosado',
                'riverarosado.d@gmail.com',
                'Estudiante_Anual',
                '2024-01-09 18:37:57',
                '2025-01-09 18:38:35',
                '8396',
                'expired'
            ],

            [
                'Miguel',
                'Rodriguez Fernandez',
                'mikeyyeli@gmail.com',
                'Individual_Mensual',
                '2023-12-24 05:10:28',
                '2024-05-31 00:01:36',
                '8261',
                'expired'
            ],

            [
                'Damarys',
                'Auli',
                'aulidamarys@gmail.com',
                'Estudiante_Anual',
                '2023-12-20 13:12:47',
                '2024-12-20 13:12:47',
                '8187',
                'active'
            ],

            [
                'Adlin',
                'Cotto',
                'adlincotto1@yahoo.com',
                'Individual_Anual',
                '2023-12-07 10:30:50',
                '2024-12-07 10:34:58',
                '7898',
                'expired'
            ],

            [
                'Ramon',
                'Rivera',
                'rarivera@anderson.edu',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:36',
                '7803',
                'expired'
            ],

            [
                'Karla',
                'Stevenson',
                'karla@aeth.org',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:36',
                '7802',
                'expired'
            ],

            [
                'Felisa',
                'Roman',
                'romanfelisa@gmail.com',
                'Individual_Anual',
                '2018-03-14 19:00:00',
                '2025-03-14 19:00:00',
                '7752',
                'active'
            ],

            [
                'Hermes',
                'Sanchez Guzman',
                'hermes.sanchez@upr.edu',
                'Estudiante_Anual',
                '2023-05-31 19:00:00',
                '2025-01-01 00:02:05',
                '7751',
                'expired'
            ],

            [
                'Susy',
                'Brommers',
                'susy.brommers@biola.edu',
                'Institucional_Anual',
                '2023-10-24 19:00:00',
                '2025-10-24 19:00:00',
                '7748',
                'active'
            ],

            [
                'Hector',
                'De Ycaza',
                'usameh@churchofgod.org',
                'Institucional_Anual',
                '2023-05-15 19:00:00',
                '2025-05-15 19:00:00',
                '7744',
                'active'
            ],

            [
                'Karen',
                'Reaume',
                'kreaume@ashland.edu',
                'Institucional_Anual',
                '2023-03-26 19:00:00',
                '2025-03-26 19:00:00',
                '7743',
                'active'
            ],

            [
                'Obed',
                'Jauregui',
                'pastor@iglesiadelideres.com',
                'Institucional_Anual',
                '2023-03-23 19:00:00',
                '2025-03-23 19:00:00',
                '7742',
                'active'
            ],

            [
                'Dr. Alfredo L.',
                'Didier PhD.',
                'pastorfreddycayey@hotmail.com',
                'Institucional_Anual',
                '2023-01-23 19:00:00',
                '2025-03-14 13:30:51',
                '7741',
                'active'
            ],

            [
                'Lori',
                'Tapia',
                'ltapia@cpohm.disciples.org',
                'Institucional_Anual',
                '2018-11-09 19:00:00',
                '2025-02-28 00:02:18',
                '7740',
                'expired'
            ],

            [
                'Bellamin',
                'Gomez',
                'benjamin.gomez1@gmail.com',
                'Estudiante_Anual',
                '2023-11-09 12:07:25',
                '2024-11-09 12:08:05',
                '7738',
                'expired'
            ],

            [
                'Latin American Bible Institute',
                'MORA',
                'GALVAREZ@LABI.EDU',
                'Institucional_Anual',
                '2019-11-06 19:00:00',
                '2025-04-23 19:00:00',
                '7733',
                'active'
            ],

            [
                'Pedro',
                'Davila',
                'seminarioglobalonline@gmail.com',
                'Institucional_Anual',
                '2023-05-13 19:00:00',
                '2024-07-09 00:00:31',
                '7732',
                'expired'
            ],

            [
                'Julian',
                'Guzman',
                'julian@urbanchurchcenter.org',
                'Institucional_Anual',
                '2023-11-07 19:00:00',
                '2025-11-07 19:00:00',
                '7731',
                'active'
            ],

            [
                'Hispanic',
                'Summer Program',
                'dmachado@hispanicsummerprogram.org',
                'Institucional_Anual',
                '2024-10-07 00:00:00',
                '2025-10-07 00:00:00',
                '7689',
                'active'
            ],

            [
                'Marco',
                'Barron',
                'mbarron@stark.edu',
                'Estudiante_Mensual',
                '2023-10-24 11:07:28',
                '2024-10-23 19:00:30',
                '7684',
                'expired'
            ],

            [
                'Erick',
                'Sagastume',
                'ericksagastume1998@gmail.com',
                'Estudiante_Anual',
                '2023-10-24 10:26:43',
                '2024-10-24 10:27:13',
                '7682',
                'expired'
            ],

            [
                'Blas',
                'Ramirez',
                'lasnacionesparadios@yahoo.com',
                'Institucional_Anual',
                '2020-06-29 19:00:00',
                '2024-06-18 19:00:43',
                '7679',
                'expired'
            ],

            [
                'FELIX',
                'PEREZ',
                'mviruet24@yahoo.com',
                'Institucional_Anual',
                '2023-06-27 19:00:00',
                '2024-06-26 19:00:18',
                '7676',
                'expired'
            ],

            [
                'Christy',
                'Frederick',
                'cfrederick@unm.edu',
                'Estudiante_Anual',
                '2023-10-02 09:15:58',
                '2024-10-02 09:16:32',
                '7388',
                'expired'
            ],

            [
                'Erika',
                'Ramos',
                'erikaliz1982@gmail.com',
                'Institucional_Mensual',
                '2023-08-31 11:44:42',
                '2024-08-30 19:03:22',
                '7311',
                'expired'
            ],

            [
                'Isaias',
                'Rivera',
                'santur8@hotmail.com',
                'Individual_Anual',
                '2023-08-16 07:23:45',
                '2024-08-16 07:25:18',
                '7192',
                'expired'
            ],

            [
                'NESTOR',
                'GOMEZ',
                'nestor.profe@gmail.com',
                'Individual_Anual',
                '2023-08-13 22:37:47',
                '2024-08-13 22:39:10',
                '7190',
                'expired'
            ],

            [
                'Kerwin',
                'Rodriguez',
                'kerwin.rodriguez@gmail.com',
                'Estudiante_Anual',
                '2023-07-11 12:31:12',
                '2024-07-11 12:32:13',
                '6967',
                'expired'
            ],

            [
                'Christian',
                'Silva',
                'csilva.michael5@gmail.com',
                'Estudiante_Mensual',
                '2023-07-07 14:00:42',
                '2024-05-31 00:01:46',
                '6849',
                'expired'
            ],

            [
                'Juan Carlos',
                'Cuartas',
                'jucuartas@hotmail.com',
                'Estudiante_Anual',
                '2023-06-28 18:43:26',
                '2024-06-28 18:44:50',
                '6842',
                'expired'
            ],

            [
                'Cecilio',
                'Hernandez',
                'chernandez.d.min@gmail.com',
                'Individual_Mensual',
                '2023-06-07 12:26:53',
                '2024-08-10 13:13:09',
                '6727',
                'expired'
            ],

            [
                'Martin Joel',
                'Santos Cruz',
                'chapmjsantos@gmail.com',
                'Estudiante_Anual',
                '2023-06-06 15:53:14',
                '2024-06-06 15:54:13',
                '6724',
                'expired'
            ],

            [
                'Adlin',
                'Cotto',
                'info@bhcarroll.edu',
                'Institucional_Anual',
                '2022-09-01 19:00:00',
                '2023-10-01 19:00:11',
                '6716',
                'expired'
            ],

            [
                'Jorge G.',
                'Orozco',
                'info@uteca.org',
                'Institucional_Anual',
                '2023-05-30 09:52:05',
                '2024-05-30 09:54:58',
                '6717',
                'expired'
            ],

            [
                'Natanael',
                'Valenzuela',
                'info@utiuniversity.org',
                'Institucional_Mensual',
                '2023-05-30 09:52:04',
                '2025-02-19 00:00:41',
                '6715',
                'expired'
            ],

            [
                'Greg',
                'Henson',
                'info@kairos.edu',
                'Institucional_Anual',
                '2023-05-30 09:52:03',
                '2024-05-30 09:54:58',
                '6714',
                'expired'
            ],

            [
                'Pablo J',
                'Rivera Madera',
                'info@lafecorp.org',
                'Institucional_Anual',
                '2020-07-03 19:00:00',
                '2023-11-04 19:00:34',
                '6713',
                'expired'
            ],

            [
                'Jose',
                'Santiago',
                'jmsaint@juno.com',
                'Individual_Mensual',
                '2021-04-30 19:00:00',
                '2024-05-31 00:01:37',
                '6712',
                'expired'
            ],

            [
                'Anneris',
                'Albizu',
                'felixcolonramos@hotmail.com',
                'Institucional_Anual',
                '2018-03-31 19:00:00',
                '2023-05-30 08:52:40',
                '6711',
                'expired'
            ],

            [
                'Danny',
                'Santiago',
                'pastordannysantiago@yahoo.com',
                'Institucional_Anual',
                '2013-03-31 19:00:00',
                '2024-10-25 19:01:09',
                '6709',
                'expired'
            ],

            [
                'Amanda',
                'Alexander',
                'aalexander@sbdiocese.org',
                'Institucional_Anual',
                '2018-03-31 19:00:00',
                '2025-06-28 00:00:00',
                '6710',
                'active'
            ],

            [
                'Hattie',
                'Tiburcio',
                'hattie777@gmail.com',
                'Institucional_Anual',
                '2011-03-31 19:00:00',
                '2024-11-29 19:01:12',
                '6708',
                'expired'
            ],

            [
                'Daniel',
                'Prieto',
                'dprieto@lifepacific.edu',
                'Institucional_Anual',
                '2011-03-31 19:00:00',
                '2025-03-14 13:33:46',
                '6707',
                'active'
            ],

            [
                'Elimelec',
                'Cordero',
                'ecordero@hbschicago.org',
                'Institucional_Anual',
                '2011-03-31 19:00:00',
                '2024-04-18 19:00:29',
                '6705',
                'expired'
            ],

            [
                'Erin',
                'Henderson',
                'erinhenderson5576@gmail.com',
                'Institucional_Anual',
                '2022-02-09 19:00:00',
                '2023-05-30 08:52:31',
                '6703',
                'expired'
            ],

            [
                'Jesus',
                'Rodriguez Cortez',
                'edu@discipulospr.org',
                'Institucional_Anual',
                '2012-07-16 19:00:00',
                '2023-05-30 08:52:31',
                '6704',
                'expired'
            ],

            [
                'Angela',
                'Sims',
                'president@crcds.edu',
                'Institucional_Anual',
                '2022-02-09 19:00:00',
                '2023-05-30 08:52:29',
                '6702',
                'expired'
            ],

            [
                'Matthew',
                'Sykes',
                'msykes@gracechristian.edu',
                'Institucional_Anual',
                '2022-02-02 19:00:00',
                '2025-07-31 00:00:00',
                '6701',
                'active'
            ],

            [
                'Claudia',
                'Jaramillo',
                'pastor@alientodevidacfl.org',
                'Institucional_Anual',
                '2021-10-29 19:00:00',
                '2025-12-31 00:00:00',
                '6700',
                'active'
            ],

            [
                'Pablo',
                'Jimenez',
                'revpablojimenez@nccmn.org',
                'Institucional_Anual',
                '2010-12-26 19:00:00',
                '2023-05-30 08:52:25',
                '6698',
                'expired'
            ],

            [
                'Angie',
                'Jackson',
                'angela.jackson@cbts.edu',
                'Institucional_Anual',
                '2021-10-05 19:00:00',
                '2023-05-30 08:52:23',
                '6697',
                'expired'
            ],

            [
                'Monica',
                'Tornoe',
                'mtornoe@austinseminary.edu',
                'Institucional_Anual',
                '2021-09-29 19:00:00',
                '2023-05-30 08:52:22',
                '6696',
                'expired'
            ],

            [
                'Christina',
                'Smerick',
                'bdpeterson@nnu.edu',
                'Institucional_Anual',
                '2021-09-28 19:00:00',
                '2023-05-30 08:52:22',
                '6695',
                'expired'
            ],

            [
                'Misael',
                'Cornelio-Arias',
                'spdescuelademisiones@gmail.com',
                'Institucional_Anual',
                '2021-09-27 19:00:00',
                '2023-05-30 08:52:20',
                '6694',
                'expired'
            ],

            [
                'Jane',
                'Atkins Vasquez',
                'janevasquez1@att.net',
                'Institucional_Anual',
                '2012-06-12 19:00:00',
                '2023-05-30 08:52:19',
                '6693',
                'expired'
            ],

            [
                'Ruben',
                'Ortiz',
                'rortiz@cbf.net',
                'Institucional_Anual',
                '2020-07-29 19:00:00',
                '2025-09-13 00:00:00',
                '6692',
                'active'
            ],

            [
                'Daniel',
                'Nin',
                'logos@codetel.net.do',
                'Institucional_Anual',
                '2021-07-08 19:00:00',
                '2023-05-30 08:52:16',
                '6691',
                'expired'
            ],

            [
                'Enoe',
                'Cortazar May',
                'rectoriaiesa@gmail.com',
                'Institucional_Anual',
                '2021-06-27 19:00:00',
                '2023-05-30 08:52:16',
                '6690',
                'expired'
            ],

            [
                'James Elisha',
                'Taneti',
                'jtaneti@upsem.edu',
                'Institucional_Anual',
                '2021-02-01 19:00:00',
                '2023-05-30 08:52:13',
                '6688',
                'expired'
            ],

            [
                'Angel',
                'Santana',
                'tskok.strdr@gmail.com',
                'Institucional_Mensual',
                '2020-11-18 19:00:00',
                '2023-05-30 08:52:13',
                '6687',
                'expired'
            ],

            [
                'Maria del Carmen',
                'Laureano (Ortega)',
                'emergepr@yahoo.com',
                'Institucional_Anual',
                '2020-09-02 19:00:00',
                '2023-09-02 19:03:45',
                '6686',
                'expired'
            ],

            [
                'Elisamuel',
                'Rodriguez',
                'director@mizparam.org',
                'Institucional_Mensual',
                '2020-08-31 19:00:00',
                '2024-09-01 19:02:05',
                '6685',
                'expired'
            ],

            [
                'Lidelmar',
                'Caceres',
                'iglesia@iglesiadediosdelynn.org',
                'Institucional_Mensual',
                '2020-08-26 19:00:00',
                '2023-05-30 08:52:09',
                '6684',
                'expired'
            ],

            [
                'Deborah',
                'Junker',
                'debora.junker@garrett.edu',
                'Institucional_Anual',
                '2020-04-07 19:00:00',
                '2023-05-30 08:52:07',
                '6683',
                'expired'
            ],

            [
                'Alexandra',
                'Santini',
                'santinialexandra7@gmail.com',
                'Institucional_Mensual',
                '2020-02-02 19:00:00',
                '2025-04-03 00:00:00',
                '6681',
                'active'
            ],

            [
                'Juan Carlos',
                'Chicas',
                'ministrandomultitudes@hotmail.com',
                'Institucional_Mensual',
                '2020-10-03 19:00:00',
                '2025-04-04 00:00:00',
                '6678',
                'active'
            ],

            [
                'Michael',
                'Hernandez',
                'mhernandez@cogop.org',
                'Institucional_Anual',
                '2020-11-11 19:00:00',
                '2025-04-17 19:00:00',
                '6680',
                'active'
            ],

            [
                'Craig',
                'Nessan',
                'cnessan@wartburgseminary.edu',
                'Institucional_Anual',
                '2020-07-19 19:00:00',
                '2023-07-30 19:00:23',
                '6679',
                'expired'
            ],

            [
                'Jaime',
                'Briceño',
                'jbriceno@bexleyseabury.edu',
                'Institucional_Anual',
                '2020-04-21 19:00:00',
                '2023-05-30 08:52:02',
                '6677',
                'expired'
            ],

            [
                'Victor',
                'Mendez',
                'profesorvm@gmail.com',
                'Institucional_Mensual',
                '2022-01-24 19:00:00',
                '2024-01-24 19:06:40',
                '6676',
                'expired'
            ],

            [
                'David',
                'Bronkema',
                'semdean@eastern.edu',
                'Institucional_Anual',
                '2021-06-27 19:00:00',
                '2023-05-30 08:52:01',
                '6675',
                'expired'
            ],

            [
                'Luis',
                'Nazario',
                'lnazariot@aol.com',
                'Institucional_Mensual',
                '2015-04-07 19:00:00',
                '2025-04-11 00:00:00',
                '6672',
                'active'
            ],

            [
                'Stephen',
                'Austin',
                'austin@ibitibi.org',
                'Institucional_Anual',
                '2020-09-06 19:00:00',
                '2025-05-16 00:00:00',
                '6674',
                'active'
            ],

            [
                'Ramon',
                'Arce',
                'ramonarce@yahoo.com',
                'Institucional_Anual',
                '2012-11-07 19:00:00',
                '2023-05-30 08:51:58',
                '6673',
                'expired'
            ],

            [
                'Magdalena',
                'Sanchez',
                'magdalena.sanchez@chet.org',
                'Institucional_Anual',
                '2004-06-14 19:00:00',
                '2023-05-30 08:51:56',
                '6671',
                'expired'
            ],

            [
                'MIRNA L',
                'QUINONES',
                'chaplain@outlook.es',
                'Institucional_Mensual',
                '2020-04-29 19:00:00',
                '2025-04-29 00:00:00',
                '6669',
                'active'
            ],

            [
                'Johanna',
                'Chacon Rugh',
                'Rughj@WESLEYAN.ORG',
                'Institucional_Anual',
                '2011-05-02 19:00:00',
                '2023-05-30 08:51:52',
                '6667',
                'expired'
            ],

            [
                'Rachel',
                'Gawn',
                'rgawn@lancasterseminary.edu',
                'Institucional_Anual',
                '2021-04-11 19:00:00',
                '2023-05-30 08:51:51',
                '6666',
                'expired'
            ],

            [
                'Jose',
                'Serrano',
                'josechaplain@gmail.com',
                'Institucional_Mensual',
                '2014-12-07 19:00:00',
                '2023-05-30 08:51:49',
                '6664',
                'expired'
            ],

            [
                'Felix',
                'Muñiz',
                'munizfel@aol.com',
                'Institucional_Anual',
                '2013-01-24 19:00:00',
                '2025-03-14 00:00:00',
                '6665',
                'active'
            ],

            [
                'Emanuel',
                'Padilla',
                'epadilla@worldoutspoken.com',
                'Institucional_Anual',
                '2019-07-30 19:00:00',
                '2023-05-30 08:51:47',
                '6662',
                'expired'
            ],

            [
                'Narciso',
                'Montas',
                'drnarcisomontas@gmail.com',
                'Individual_Anual',
                '2023-11-13 19:00:00',
                '2026-02-07 14:32:42',
                '6663',
                'active'
            ],

            [
                'David',
                'Vasquez-Levy',
                'president@psr.edu',
                'Institucional_Anual',
                '2021-06-29 19:00:00',
                '2025-03-25 00:00:00',
                '6661',
                'active'
            ],

            [
                'Steve',
                'Gober',
                'steve.gober@asburyseminary.edu',
                'Institucional_Anual',
                '2012-02-26 19:00:00',
                '2023-05-30 08:51:45',
                '6660',
                'expired'
            ],

            [
                'CARLOS',
                'CEVALLOS',
                'carloscevallos@fuller.edu',
                'Institucional_Anual',
                '2020-03-23 19:00:00',
                '2025-06-06 00:00:00',
                '6659',
                'active'
            ],

            [
                'ISMAEL',
                'RUIZ-MILLAN',
                'irmillan@div.duke.edu',
                'Institucional_Anual',
                '2021-07-27 19:00:00',
                '2023-05-30 08:51:44',
                '6658',
                'expired'
            ],

            [
                'Elias',
                'Lopez',
                'eliaslopez@institutobiblicodallas.org',
                'Institucional_Anual',
                '2021-09-16 19:00:00',
                '2023-05-30 08:51:41',
                '6657',
                'expired'
            ],

            [
                'Victor M',
                'Ramos',
                'pastorramos1@gmail.com',
                'Institucional_Anual',
                '2021-12-09 19:00:00',
                '2026-01-28 00:00:00',
                '6656',
                'active'
            ],

            [
                'Francisco',
                'Ortiz',
                'presidente@utcpr.edu',
                'Institucional_Anual',
                '2004-05-06 19:00:00',
                '2023-05-30 08:51:40',
                '6655',
                'expired'
            ],

            [
                'David',
                'Kersten',
                'dwkersten@northpark.edu',
                'Institucional_Anual',
                '2014-12-07 19:00:00',
                '2023-05-30 08:51:37',
                '6654',
                'expired'
            ],

            [
                'Abner',
                'Bixcul Lima',
                'pastorabnerlima@gmail.com',
                'Institucional_Anual',
                '2020-04-23 19:00:00',
                '2023-05-30 08:51:36',
                '6653',
                'expired'
            ],

            [
                'Mike',
                'Cuckler',
                'jmcuckler@seu.edu',
                'Institucional_Mensual',
                '2012-08-01 19:00:00',
                '2025-02-26 00:00:15',
                '6652',
                'expired'
            ],

            [
                'Jesse',
                'Arroyo',
                'Jessearroyo45@gmail.com',
                'Institucional_Mensual',
                '2021-01-29 19:00:00',
                '2023-05-30 08:51:34',
                '6651',
                'expired'
            ],

            [
                'Norberto',
                'Domínguez Rodríguez',
                'dominguez@inter.edu',
                'Institucional_Anual',
                '2006-07-17 19:00:00',
                '2025-01-29 00:00:16',
                '6649',
                'expired'
            ],

            [
                'Eli',
                'Nieves Perez',
                'ELI-NIEVESPEREZ@hotmail.com',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:37',
                '6647',
                'expired'
            ],

            [
                'Kyrene',
                'Hernandez',
                'kyreneh@harborgenesiscc.org',
                'Institucional_Anual',
                '2018-06-12 19:00:00',
                '2024-04-23 19:00:38',
                '6648',
                'expired'
            ],

            [
                'Jared E',
                'Alcantara',
                'Jared_Alcantara@baylor.edu',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:37',
                '6646',
                'expired'
            ],

            [
                'Kathleen',
                'Armas',
                'contact@katarmas.com',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:37',
                '6645',
                'expired'
            ],

            [
                'Michelle',
                'Navarrete',
                'michelle.navarrete@my.wheaton.edu',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:38',
                '6644',
                'expired'
            ],

            [
                'Itzel Medari',
                'Soto',
                'itzel.reyes@biola.edu',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:37',
                '6643',
                'expired'
            ],

            [
                'REBECCA',
                'SANTIAGO',
                'lcda.rsantiago@gmail.com',
                'Individual_Anual',
                '2021-03-31 19:00:00',
                '2024-06-24 19:00:51',
                '6642',
                'expired'
            ],

            [
                'Ivelisse',
                'Valentin Vera',
                'ivalentin@metro.inter.edu',
                'Individual_Anual',
                '2022-06-27 19:00:00',
                '2024-05-31 00:01:46',
                '6641',
                'expired'
            ],

            [
                'Maritza',
                'Rosas',
                'magui57@yahoo.com',
                'Individual_Anual',
                '2010-03-31 19:00:00',
                '2024-05-31 00:01:38',
                '6640',
                'expired'
            ],

            [
                'Alexia',
                'Salvatierra',
                'alexia@alexiasalvatierra.com',
                'Individual_Anual',
                '2018-03-31 19:00:00',
                '2025-09-16 00:00:00',
                '6639',
                'active'
            ],

            [
                'Javier',
                'Viera Muñiz',
                'javier.viera@garrett.edu',
                'Institucional_Anual',
                '2024-03-12 00:00:00',
                '2025-03-12 00:00:00',
                '6638',
                'active'
            ],

            [
                'Pedro',
                'Rios',
                'info@peterriosconsulting.com',
                'Individual_Anual',
                '2021-03-08 19:00:00',
                '2025-02-14 00:00:08',
                '6637',
                'expired'
            ],

            [
                'Emanuel',
                'Padilla',
                'epadilla@worldoutspoken.com',
                'Individual_Anual',
                '2017-12-31 19:00:00',
                '2024-05-31 00:01:38',
                '6636',
                'expired'
            ],

            [
                'Julissa',
                'Ossorio',
                'jossorio@inter.edu',
                'Individual_Anual',
                '2022-12-31 19:00:00',
                '2024-05-31 00:01:38',
                '6635',
                'expired'
            ],

            [
                'Carlos',
                'Ramos',
                'dr.cgramos.pad@gmail.com',
                'Individual_Anual',
                '2022-04-19 19:00:00',
                '2025-03-18 00:00:00',
                '6634',
                'active'
            ],

            [
                'Hector J',
                'Torres Rodriguez',
                'hjtorres10@gmail.com',
                'Individual_Anual',
                '2014-02-06 19:00:00',
                '2024-05-31 00:01:39',
                '6631',
                'expired'
            ],

            [
                'Rodolfo',
                'Giron',
                'rjgiron@gmail.com',
                'Individual_Anual',
                '2022-03-31 19:00:00',
                '2024-05-31 00:01:48',
                '6632',
                'expired'
            ],

            [
                'Marcos',
                'Canales',
                'marcos.canales.a@gmail.com',
                'Individual_Anual',
                '2022-03-31 19:00:00',
                '2024-05-31 00:01:39',
                '6630',
                'expired'
            ],

            [
                'Jose',
                'Santos Horta',
                'drjoseasantos56@gmail.com',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2025-05-31 00:00:00',
                '6629',
                'active'
            ],

            [
                'Julio',
                'Sical',
                'julio.sical@chet.org',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2024-05-31 00:01:49',
                '6628',
                'expired'
            ],

            [
                'Israel',
                'Figueroa Pastrana',
                'figueroaisrael@hotmail.com',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2024-05-31 00:01:49',
                '6627',
                'expired'
            ],

            [
                'Benjamin',
                'Perez de Gracia',
                'benperezdegracia@aol.com',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2024-05-31 00:01:49',
                '6626',
                'expired'
            ],

            [
                'Lydia',
                'Mercado',
                'mercado1950@hotmail.com',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2024-05-31 00:01:49',
                '6625',
                'expired'
            ],

            [
                'Cris',
                'Berlingeri',
                'criseidaberlingeri@yahoo.com',
                'Individual_Mensual',
                '2022-03-19 19:00:00',
                '2024-05-31 00:01:50',
                '6623',
                'expired'
            ],

            [
                'Elias',
                'Rodriguez',
                'erodriguez@cogop.org',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2025-04-03 00:00:00',
                '6624',
                'active'
            ],

            [
                'Pedro Ernesto',
                'Miranda Torres',
                'pmiranda@metro.inter.edu',
                'Individual_Mensual',
                '1998-08-18 19:00:00',
                '2025-08-18 00:00:00',
                '6622',
                'active'
            ],

            [
                'Luis Arnaldo',
                'Mejias Rodriguez',
                'nardinmejias@gmail.com',
                'Individual_Anual',
                '2022-02-15 19:00:00',
                '2024-05-31 00:01:50',
                '6621',
                'expired'
            ],

            [
                'Guesnerth',
                'Perea',
                'GJPEREA@GMAIL.COM',
                'Individual_Anual',
                '2022-02-14 19:00:00',
                '2024-05-31 00:01:39',
                '6620',
                'expired'
            ],

            [
                'Pedro',
                'Davila',
                'seminarioglobalonline@gmail.com',
                'Individual_Anual',
                '2022-02-08 19:00:00',
                '2024-05-31 00:01:39',
                '6619',
                'expired'
            ],

            [
                'Daniel',
                'Flores',
                'danflores@tlu.edu',
                'Individual_Anual',
                '2022-01-19 19:00:00',
                '2024-05-31 00:01:50',
                '6618',
                'expired'
            ],

            [
                'Angel D.',
                'Jordan',
                'adjordan@bgea.org',
                'Individual_Anual',
                '2022-01-13 19:00:00',
                '2024-05-31 00:01:49',
                '6617',
                'expired'
            ],

            [
                'Matt',
                'Arciniega',
                'mattarciniega@gmail.com',
                'Individual_Anual',
                '2022-01-03 19:00:00',
                '2024-05-31 00:01:50',
                '6616',
                'expired'
            ],

            [
                'Bladimiro',
                'Monroy',
                'bemonroy@aol.com',
                'Individual_Mensual',
                '2021-10-20 19:00:00',
                '2025-03-21 00:00:00',
                '6614',
                'active'
            ],

            [
                'Claudia',
                'Jaramillo',
                'pastor@alientodevidacfl.org',
                'Individual_Anual',
                '2021-12-16 19:00:00',
                '2025-12-16 19:00:00',
                '6615',
                'active'
            ],

            [
                'Robert',
                'Reyes',
                'rreyes@lbc.edu',
                'Individual_Anual',
                '2021-10-19 19:00:00',
                '2024-05-31 00:01:51',
                '6613',
                'expired'
            ],

            [
                'Christopher',
                'Tirres',
                'ctirres@gmail.com',
                'Individual_Anual',
                '2021-10-19 19:00:00',
                '2024-05-31 00:01:51',
                '6612',
                'expired'
            ],

            [
                'Samuel',
                'Silva Gotay',
                'jovitac41@gmail.com',
                'Individual_Mensual',
                '2021-10-11 19:00:00',
                '2024-05-31 00:01:51',
                '6611',
                'expired'
            ],

            [
                'Guillermo',
                'Ramirez Munoz',
                'drgramirez2@gmail.com',
                'Individual_Anual',
                '2021-10-05 19:00:00',
                '2024-05-31 00:01:51',
                '6610',
                'expired'
            ],

            [
                'Taynna',
                'Cabrera',
                'revscabrera@yahoo.com',
                'Individual_Anual',
                '2021-10-03 19:00:00',
                '2025-04-10 00:00:00',
                '6609',
                'active'
            ],

            [
                'Juan Carlos',
                'Esparza Ochoa',
                'juancarlos.esparzaochoa@gmail.com',
                'Individual_Mensual',
                '2021-09-22 19:00:00',
                '2025-03-22 00:00:00',
                '6608',
                'active'
            ],

            [
                'Stanley David',
                'Slade',
                'sslade07@gmail.com',
                'Individual_Anual',
                '2021-08-19 19:00:00',
                '2024-05-31 00:01:52',
                '6607',
                'expired'
            ],

            [
                'David',
                'Zamora',
                'david.zamoraramirez@tsm.edu',
                'Individual_Anual',
                '2021-07-22 19:00:00',
                '2024-05-31 00:01:52',
                '6606',
                'expired'
            ],

            [
                'Martin',
                'Rodriguez',
                'mrodriguez@apu.edu',
                'Individual_Anual',
                '2021-07-28 19:00:00',
                '2024-05-31 00:01:52',
                '6605',
                'expired'
            ],

            [
                'Jonathan',
                'Hanegan',
                'jonathan.hanegan@gmail.com',
                'Individual_Anual',
                '2021-07-09 19:00:00',
                '2024-05-31 00:01:52',
                '6603',
                'expired'
            ],

            [
                'Richard',
                'Serrano',
                'richard.serrano@tearfund.org',
                'Individual_Anual',
                '2024-10-17 00:00:00',
                '2025-10-17 00:00:00',
                '6604',
                'active'
            ],

            [
                'Damaries',
                'Alverio',
                '113dimari@gmail.com',
                'Individual_Mensual',
                '2021-06-27 19:00:00',
                '2024-05-31 00:01:53',
                '6602',
                'expired'
            ],

            [
                'Jose',
                'Pacheco Castillo',
                'jose_76pacheco@hotmail.com',
                'Individual_Mensual',
                '2021-04-21 19:00:00',
                '2025-04-21 00:00:00',
                '6600',
                'active'
            ],

            [
                'Brian',
                'Lugioyo',
                'blugioyo@googlemail.com',
                'Individual_Mensual',
                '2021-06-06 19:00:00',
                '2024-05-31 00:01:53',
                '6601',
                'expired'
            ],

            [
                'Hosffman',
                'Ospino',
                'ospinoho@bc.edu',
                'Individual_Anual',
                '2020-08-27 19:00:00',
                '2024-05-31 00:01:53',
                '6599',
                'expired'
            ],

            [
                'Sergio',
                'Cedeño',
                'scedeno@gmail.com',
                'Individual_Mensual',
                '2020-08-26 19:00:00',
                '2024-05-31 00:01:54',
                '6598',
                'expired'
            ],

            [
                'Luis',
                'Rivera',
                'lrr@garrett.edu',
                'Individual_Anual',
                '1992-08-20 19:00:00',
                '2025-12-09 00:00:00',
                '6596',
                'active'
            ],

            [
                'Elizabeth',
                'Conde-Frazier',
                'econdefrazier@aeth.org',
                'Individual_Anual',
                '1996-03-28 19:00:00',
                '2025-09-13 00:00:00',
                '6594',
                'active'
            ],

            [
                'Miguel',
                'Morales',
                'miguel@elasesor.org',
                'Individual_Anual',
                '2015-07-26 19:00:00',
                '2024-05-31 00:01:54',
                '6593',
                'expired'
            ],

            [
                'Lydia',
                'Hernández-Marcial',
                'rvdalhernandez@gmail.com',
                'Individual_Mensual',
                '2020-07-15 19:00:00',
                '2024-05-31 00:01:54',
                '6592',
                'expired'
            ],

            [
                'Abner',
                'Bixcul Lima',
                'pastorabnerlima@gmail.com',
                'Individual_Anual',
                '2020-04-23 19:00:00',
                '2024-05-31 00:01:54',
                '6591',
                'expired'
            ],

            [
                'Peter',
                'Acevedo',
                'bxtrudisciple@gmail.com',
                'Individual_Mensual',
                '2020-02-22 19:00:00',
                '2024-05-31 00:01:54',
                '6590',
                'expired'
            ],

            [
                'Robert',
                'Chao Romero',
                'robertchaoromero@gmail.com',
                'Individual_Anual',
                '2020-01-28 19:00:00',
                '2024-05-31 00:01:55',
                '6589',
                'expired'
            ],

            [
                'Nelson',
                'Bonilla',
                'dalton614@aol.com',
                'Individual_Mensual',
                '2020-03-17 00:00:00',
                '2025-02-17 00:00:14',
                '6588',
                'expired'
            ],

            [
                'Liza Lynnette',
                'Miranda',
                'lizalynnette@hotmail.com',
                'Individual_Mensual',
                '2020-07-15 19:00:00',
                '2024-08-16 00:00:00',
                '6587',
                'expired'
            ],

            [
                'Martha',
                'Polo-Koehler',
                'polokoehler@sbcglobal.net',
                'Individual_Anual',
                '1996-12-31 19:00:00',
                '2024-05-31 00:01:55',
                '6586',
                'expired'
            ],

            [
                'Rubén',
                'Fernández',
                'rfernandez@seminarionazareno.net',
                'Individual_Anual',
                '2020-01-12 19:00:00',
                '2024-05-31 00:01:55',
                '6584',
                'expired'
            ],

            [
                'Grace',
                'Martino',
                'gmartino@cbf.net',
                'Individual_Mensual',
                '2020-10-08 19:00:00',
                '2025-09-08 00:00:00',
                '6583',
                'active'
            ],

            [
                'Julio',
                'Sabater',
                'revdrjuliosabater@gmail.com',
                'Individual_Mensual',
                '2020-10-02 19:00:00',
                '2025-04-03 00:00:00',
                '6582',
                'active'
            ],

            [
                'Efrain',
                'Velazquez',
                'efrainv@uaa.edu',
                'Individual_Anual',
                '2011-11-09 19:00:00',
                '2024-05-31 00:01:55',
                '6581',
                'expired'
            ],

            [
                'Marcelino',
                'Rivera',
                'Reverendo1@aol.com',
                'Individual_Anual',
                '2020-08-30 19:00:00',
                '2024-05-31 00:01:55',
                '6580',
                'expired'
            ],

            [
                'José Daniel',
                'Montañez',
                'JDMontanez@aol.com',
                'Individual_Anual',
                '1996-12-31 19:00:00',
                '2025-07-11 00:00:00',
                '6579',
                'active'
            ],

            [
                'Fernando',
                'Cascante',
                'fcascante@aeth.org',
                'Individual_Anual',
                '2008-06-18 19:00:00',
                '2024-05-31 00:01:40',
                '6578',
                'expired'
            ],

            [
                'Eynar',
                'Mina',
                'eynarmina@hotmail.com',
                'Individual_Anual',
                '2013-08-13 19:00:00',
                '2024-05-31 00:01:56',
                '6577',
                'expired'
            ],

            [
                'José',
                'Castro',
                'jmcastro13@yahoo.com',
                'Individual_Mensual',
                '2024-08-23 00:00:00',
                '2025-03-24 00:00:00',
                '6576',
                'active'
            ],

            [
                'Alberto',
                'Garcia',
                'albert.garcia@cuw.edu',
                'Individual_Anual',
                '1996-12-31 19:00:00',
                '2024-05-31 00:01:56',
                '6574',
                'expired'
            ],

            [
                'Jose',
                'Santos',
                'jsantos@unilimi.org',
                'Individual_Anual',
                '2020-09-27 19:00:00',
                '2024-05-31 00:01:56',
                '6575',
                'expired'
            ],

            [
                'Catherine Lee',
                'Gunsalus',
                'catyly@aol.com',
                'Individual_Anual',
                '1992-08-20 19:00:00',
                '2025-09-13 00:00:00',
                '6573',
                'active'
            ],

            [
                'Justo',
                'González',
                'justoluis325@gmail.com',
                'Individual_Anual',
                '1992-08-20 19:00:00',
                '2025-09-13 00:00:00',
                '6572',
                'active'
            ],

            [
                'José',
                'García',
                'jgarciadj@me.com',
                'Individual_Anual',
                '2020-07-08 19:00:00',
                '2024-05-31 00:01:56',
                '6571',
                'expired'
            ],

            [
                'Armida',
                'Belmonte Stephens',
                'armida.belmonte@gmail.com',
                'Individual_Anual',
                '2014-12-07 19:00:00',
                '2025-03-13 00:00:00',
                '6570',
                'active'
            ],

            [
                'Jose',
                'Flores',
                'joseflorespr257@gmail.com',
                'Individual_Mensual',
                '2020-06-05 19:00:00',
                '2025-03-21 00:00:00',
                '6569',
                'active'
            ],

            [
                'Juan D.',
                'Acuna',
                'jacuna78@att.net',
                'Individual_Mensual',
                '2020-11-11 19:00:00',
                '2024-05-31 00:01:57',
                '6568',
                'expired'
            ],

            [
                'Sammy',
                'Alfaro',
                'sammy.alfaro@gcu.edu',
                'Individual_Anual',
                '2011-08-11 19:00:00',
                '2024-05-31 00:01:57',
                '6567',
                'expired'
            ],

            [
                'Enrique A.',
                'De Jesus',
                'edejesus@churchofgod.org',
                'Individual_Anual',
                '2005-09-05 19:00:00',
                '2024-05-31 00:01:57',
                '6566',
                'expired'
            ],

            [
                'Daniel',
                'Schipani',
                'dschipani@ambs.edu',
                'Individual_Anual',
                '1996-12-31 19:00:00',
                '2026-05-31 00:00:00',
                '6565',
                'active'
            ],

            [
                'Mariano',
                'Avila',
                'mavila@calvinseminary.edu',
                'Individual_Anual',
                '2014-06-09 19:00:00',
                '2024-05-31 00:01:57',
                '6563',
                'expired'
            ],

            [
                'Octavio',
                'Esqueda',
                'octavio.esqueda@biola.edu',
                'Individual_Anual',
                '2014-05-22 19:00:00',
                '2025-08-21 00:00:00',
                '6562',
                'active'
            ],

            [
                'Yolanda',
                'Pupo-Ortiz',
                'yolanda@starpower.net',
                'Individual_Anual',
                '1993-12-05 19:00:00',
                '2024-05-31 00:01:41',
                '6561',
                'expired'
            ],

            [
                'Jane',
                'Atkins Vasquez',
                'janevasquez1@att.net',
                'Individual_Anual',
                '1996-12-31 19:00:00',
                '2024-05-31 00:01:58',
                '6560',
                'expired'
            ],

            [
                'Joel',
                'Diaz Maldonado',
                'joeladeodato@gmail.com',
                'Individual_Mensual',
                '2020-01-23 19:00:00',
                '2024-05-31 00:01:58',
                '6559',
                'expired'
            ],

            [
                'David',
                'Cortes Fuentes',
                'dcortes44@live.com',
                'Individual_Anual',
                '2022-03-30 19:00:00',
                '2024-05-31 00:01:58',
                '6558',
                'expired'
            ],

            [
                'Maria',
                'Cornou',
                'ecornou@hotmail.com',
                'Individual_Anual',
                '1992-08-20 19:00:00',
                '2024-05-31 00:01:59',
                '6557',
                'expired'
            ],

            [
                'Virginia',
                'Loubriel-Chévere',
                'virgieloubriel@yahoo.com',
                'Individual_Anual',
                '1992-02-01 19:00:00',
                '2026-05-31 00:00:00',
                '6555',
                'active'
            ],

            [
                'David',
                'Alicea',
                'davisongo53@gmail.com',
                'Individual_Mensual',
                '1992-08-20 19:00:00',
                '2024-05-31 00:01:59',
                '6554',
                'expired'
            ],

            [
                'Víctor A.',
                'Tiburcio',
                'pastortiburcio@yahoo.com',
                'Individual_Anual',
                '2021-02-22 19:00:00',
                '2024-05-31 00:01:59',
                '6553',
                'expired'
            ],

            [
                'Hattie',
                'Tiburcio',
                'hattie777@gmail.com',
                'Individual_Anual',
                '2016-05-08 19:00:00',
                '2024-05-31 00:01:59',
                '6552',
                'expired'
            ],

            [
                'JAIME',
                'TAMAY',
                'jaime@alientovision.com',
                'Institucional_Anual',
                '2016-05-08 19:00:00',
                '2024-05-31 00:02:00',
                '6550',
                'expired'
            ],

            [
                'Wanda I.',
                'Betancourt',
                'BetancourtTeach@gmail.com',
                'Estudiante_Anual',
                '2021-04-05 19:00:00',
                '2025-06-03 00:00:00',
                '6548',
                'active'
            ],

            [
                'Carlos',
                'Costa',
                'cuaresmaonline@gmail.com',
                'Estudiante_Mensual',
                '2022-03-30 19:00:00',
                '2025-07-30 00:00:00',
                '6547',
                'active'
            ],

            [
                'Socrates',
                'Perez',
                'socperezjr@gmail.com',
                'Estudiante_Anual',
                '2021-10-31 19:00:00',
                '2025-10-20 00:00:00',
                '6545',
                'active'
            ],

            [
                'Felix',
                'Bermejo',
                'felixbermejo1953@hotmail.com',
                'Estudiante_Anual',
                '2014-06-08 19:00:00',
                '2024-05-31 00:02:00',
                '6546',
                'expired'
            ],

            [
                'Luis',
                'Vizcarrondo',
                'pastorvizcarrondo@live.com',
                'Estudiante_Anual',
                '2021-10-10 19:00:00',
                '2024-05-31 00:02:00',
                '6544',
                'expired'
            ],

            [
                'Jennifer',
                'Hernandez Peach',
                'jenniferpeach@mac.com',
                'Estudiante_Anual',
                '2021-09-26 19:00:00',
                '2024-05-31 00:02:01',
                '6543',
                'expired'
            ],

            [
                'Daniel',
                'Suarez',
                'dsv1988@outlook.com',
                'Estudiante_Anual',
                '2021-09-20 19:00:00',
                '2024-05-31 00:02:01',
                '6542',
                'expired'
            ],

            [
                'Andres',
                'Sancho',
                'andres.sancho@gmail.com',
                'Estudiante_Anual',
                '2021-08-22 19:00:00',
                '2024-05-31 00:02:01',
                '6540',
                'expired'
            ],

            [
                'Wendy',
                'Cordero Rugama',
                'w.cordero.rugama@gmail.com',
                'Estudiante_Mensual',
                '2021-08-02 19:00:00',
                '2024-05-31 00:02:01',
                '6539',
                'expired'
            ],

            [
                'Marilyn',
                'Garcia',
                'marilynolemma@gmail.com',
                'Estudiante_Mensual',
                '2021-07-22 19:00:00',
                '2025-07-22 00:00:00',
                '6538',
                'active'
            ],

            [
                'Abraham',
                'Bruno',
                'abrajambh@hotmail.com',
                'Estudiante_Mensual',
                '2021-07-19 19:00:00',
                '2024-05-31 00:02:01',
                '6537',
                'expired'
            ],

            [
                'Ada Nivia',
                'Collazo-Gotay',
                'adanicollazo94@gmail.com',
                'Estudiante_Mensual',
                '2021-06-28 19:00:00',
                '2024-07-28 00:00:56',
                '6536',
                'expired'
            ],

            [
                'Shakespeare',
                'Osorio',
                'shakespeeare@gmail.com',
                'Estudiante_Anual',
                '2021-06-16 19:00:00',
                '2024-05-31 00:02:01',
                '6535',
                'expired'
            ],

            [
                'Yamil',
                'Acevedo',
                'yamil.acevedo@gmail.com',
                'Estudiante_Mensual',
                '2020-12-16 19:00:00',
                '2024-05-31 00:02:02',
                '6533',
                'expired'
            ],

            [
                'Jhovanny Yair',
                'Avila',
                'jhovannyyairavilaayala@hotmail.com',
                'Estudiante_Mensual',
                '2021-06-10 19:00:00',
                '2024-05-31 00:02:02',
                '6534',
                'expired'
            ],

            [
                'Lorayne',
                'Vallejo Enriquez',
                'lorayne72@gmail.com',
                'Estudiante_Anual',
                '2020-10-05 19:00:00',
                '2024-05-31 00:02:02',
                '6532',
                'expired'
            ],

            [
                'Alexandra',
                'Zareth',
                'zarethalexandra@gmail.com',
                'Estudiante_Mensual',
                '2020-04-17 19:00:00',
                '2025-04-17 00:00:00',
                '6529',
                'active'
            ],

            [
                'Ismael',
                'Joaquin',
                'ijandres@yahoo.com',
                'Estudiante_Mensual',
                '2020-01-29 19:00:00',
                '2025-03-28 00:00:00',
                '6527',
                'active'
            ],

            [
                'Mariel del M.',
                'Lopez',
                'mariel0321@gmail.com',
                'Estudiante_Mensual',
                '2020-01-27 19:00:00',
                '2025-03-27 00:00:00',
                '6526',
                'active'
            ],

            [
                'Rafael',
                'Diaz-Santiago',
                'rafadiazsantiago@gmail.com',
                'Estudiante_Anual',
                '2020-07-27 19:00:00',
                '2024-05-31 09:33:00',
                '6525',
                'expired'
            ],

            [
                'Zenaida',
                'Ortiz Arce',
                'lzortiz0611@gmail.com',
                'Estudiante_Anual',
                '2019-05-13 19:00:00',
                '2024-05-31 00:02:02',
                '6524',
                'expired'
            ],

            [
                'José Omar',
                'Palafox',
                'omarpalafox@fuller.edu',
                'Individual_Anual',
                '2024-07-01 00:00:00',
                '2025-06-30 00:00:00',
                '6523',
                'active'
            ],

            [
                'Gabriel',
                'Almeyda',
                'visionario247@gmail.com',
                'Estudiante_Mensual',
                '2020-06-19 19:00:00',
                '2024-05-31 00:02:03',
                '6521',
                'expired'
            ],

            [
                'Miguel',
                'Morales',
                'miguel.morales@eastern.edu',
                'Estudiante_Anual',
                '2018-06-24 19:00:00',
                '2024-05-31 00:02:03',
                '6522',
                'expired'
            ],

            [
                'Rosa María',
                'Torres Medina',
                'rmtorresmedina@gmai.com',
                'Individual_Mensual',
                '2023-05-29 21:53:59',
                '2024-05-29 19:00:46',
                '6520',
                'expired'
            ],

            [
                'Rosa María',
                'Torres Medina',
                'rmtorresmedina@gmail.com',
                'Institucional_Mensual',
                '2023-05-29 21:42:20',
                '2024-05-29 19:00:46',
                '6518',
                'expired'
            ],

            [
                'wendy',
                'colon',
                'wendyamill@gmail.com',
                'Estudiante_Mensual',
                '2023-05-24 11:12:06',
                '2025-07-29 00:00:00',
                '6516',
                'active'
            ],

            [
                'Jonatan',
                'Jimenez Garcia',
                'electronic.mail1972@gmail.com',
                'Estudiante_Anual',
                '2023-04-18 19:23:06',
                '2024-05-31 00:01:41',
                '6298',
                'expired'
            ],

            [
                'Debora',
                'Almonte',
                'deboraalmonte@fuller.edu',
                'Estudiante_Anual',
                '2023-04-18 19:20:04',
                '2024-05-31 00:01:42',
                '6296',
                'expired'
            ],

            [
                'Juan M',
                'Arias Perea',
                'juanmanuelap9202@gmail.com',
                'Estudiante_Mensual',
                '2023-04-06 16:49:33',
                '2024-05-31 00:02:03',
                '6278',
                'expired'
            ],

            [
                'Altagracia',
                'Perez-Bullard',
                'aperez-bullard@vts.edu',
                'Individual_Anual',
                '2023-04-03 12:22:05',
                '2024-05-31 00:01:42',
                '6257',
                'expired'
            ],

            [
                'Eldin',
                'Villafane',
                'eldinv@aol.com',
                'Individual_Anual',
                '2023-03-30 11:00:42',
                '2024-05-31 00:01:42',
                '6244',
                'expired'
            ],

            [
                'Maria',
                'Viera',
                'mariaviera1928@gmail.com',
                'Individual_Mensual',
                '2023-03-30 01:00:08',
                '2024-05-31 15:12:24',
                '6241',
                'expired'
            ],

            [
                'Manuel',
                'Rincon',
                'marc115722@gmail.com',
                'Estudiante_Anual',
                '2023-03-28 01:24:02',
                '2024-05-31 00:01:42',
                '6221',
                'expired'
            ],

            [
                'Rosario',
                'Orosco Caballero',
                'rosarioorosco@yahoo.com',
                'Estudiante_Mensual',
                '2023-03-27 15:57:42',
                '2024-05-31 00:01:42',
                '6219',
                'expired'
            ],

            [
                'Iraida',
                'Pizarro Figueroa',
                'iraidapizarro@gmail.com',
                'Estudiante_Anual',
                '2023-03-27 11:18:18',
                '2024-05-31 00:01:43',
                '6217',
                'expired'
            ],

            [
                'Mildred',
                'Rosario Sanchez',
                'angie.berrios127@gmail.com',
                'Institucional_Mensual',
                '2023-03-23 17:36:56',
                '2024-03-22 19:03:40',
                '6213',
                'expired'
            ],

            [
                'Julian',
                'Marin',
                'julian.marin@chet.org',
                'Individual_Mensual',
                '2023-03-21 22:05:35',
                '2024-05-31 00:01:43',
                '6190',
                'expired'
            ],

            [
                'Monica',
                'Marin',
                'monica.marin@chet.org',
                'Individual_Mensual',
                '2023-03-21 22:04:29',
                '2024-05-31 00:01:43',
                '6188',
                'expired'
            ],

            [
                'Roberto',
                'Ghione',
                'rghione@gmail.com',
                'Estudiante_Mensual',
                '2023-03-15 21:26:55',
                '2024-05-31 00:01:43',
                '6172',
                'expired'
            ],

            [
                'Deanna',
                'Alarcon',
                'alarcon_fmly@yahoo.com',
                'Individual_Mensual',
                '2023-03-15 15:46:52',
                '2024-05-31 00:01:43',
                '6170',
                'expired'
            ],

            [
                'Oscar',
                'Holzmeister',
                'oscarcito99@yahoo.com',
                'Individual_Anual',
                '2023-03-15 15:18:30',
                '2024-05-31 00:01:44',
                '6168',
                'expired'
            ],

            [
                'EDWIN',
                'VARGAS',
                'semilladebienestarpr@gmail.com',
                'Individual_Anual',
                '2023-02-28 23:49:10',
                '2025-06-30 00:00:00',
                '6104',
                'active'
            ],

            [
                'Luz D.',
                'Feliciano Cortiña',
                'luzdidake2@gmail.com',
                'Institucional_Mensual',
                '2023-02-27 21:08:37',
                '2023-03-30 21:09:05',
                '6102',
                'expired'
            ],

            [
                'Revd. Leonides',
                'Marrero-Cruz',
                'iccciforthenations@gmail.com',
                'Institucional_Anual',
                '2023-02-02 09:29:57',
                '2024-02-02 09:39:44',
                '6050',
                'expired'
            ],

            [
                'Roberto',
                'Hodgson',
                'RHodgson@nazarene.org',
                'Institucional_Anual',
                '2023-01-31 13:13:04',
                '2025-03-13 00:00:00',
                '6040',
                'active'
            ],

            [
                'Wilmer',
                'Estrada-Carrasquillo',
                'wilmerestrada@ptseminary.edu',
                'Individual_Anual',
                '2022-12-22 18:25:51',
                '2025-12-21 19:00:00',
                '5974',
                'active'
            ],

            [
                'Lizette',
                'Acosta',
                'lm_acosta@yahoo.com',
                'Individual_Anual',
                '2010-12-20 19:00:00',
                '2025-03-21 10:21:33',
                '5972',
                'active'
            ],

            [
                'Adaliz',
                'Goldilla',
                'moral.adaliz@gmail.com',
                'Estudiante_Mensual',
                '2022-12-06 16:39:36',
                '2024-05-31 00:02:03',
                '5863',
                'expired'
            ],

            [
                'Leopoldo',
                'Sánchez',
                'sanchezl@csl.edu',
                'Individual_Anual',
                '2022-11-30 16:43:54',
                '2024-12-02 01:11:27',
                '5846',
                'expired'
            ],

            [
                'Eddy',
                'Alemán',
                'ealeman@rca.org',
                'Individual_Anual',
                '2022-11-14 13:39:08',
                '2024-05-31 00:01:44',
                '5744',
                'expired'
            ],

            [
                'Javier Gonzalo',
                'Velasquez',
                'javier@bild.org',
                'Estudiante_Anual',
                '2022-11-01 16:41:42',
                '2024-05-31 00:01:44',
                '5735',
                'expired'
            ],

            [
                'Pablo Rafael',
                'Caraballo Rodríguez',
                'pablo.caraballo7913@gmail.com',
                'Individual_Anual',
                '2022-10-31 09:03:38',
                '2024-05-31 00:01:45',
                '5733',
                'expired'
            ],

            [
                'Hector',
                'Fernandez',
                'hectorfdezruiz@gmail.com',
                'Individual_Anual',
                '2022-10-19 07:35:29',
                '2024-05-31 00:01:45',
                '5641',
                'expired'
            ],

            [
                'Hector',
                'Reyes',
                'revhectorreyes@gmail.com',
                'Individual_Anual',
                '2022-10-18 21:08:59',
                '2024-05-31 00:01:45',
                '5639',
                'expired'
            ],

            [
                'Lizanne',
                'Espina',
                'lizanneespina@fuller.edu',
                'Estudiante_Mensual',
                '2022-10-05 22:04:58',
                '2025-02-06 19:00:37',
                '5631',
                'expired'
            ],

            [
                'Samuel',
                'Caraballo Lopez',
                'samcaraballo@gmail.com',
                'Individual_Anual',
                '2022-09-29 10:55:49',
                '2024-09-28 19:00:55',
                '5627',
                'expired'
            ],

            [
                'Lucila',
                'Crena',
                'lcrena@gmail.com',
                'Individual_Anual',
                '2022-07-26 15:32:15',
                '2025-06-30 00:00:00',
                '5172',
                'active'
            ],

            [
                'Christian',
                'Sanchez',
                'christian_sanchez2@baylor.edu',
                'Estudiante_Anual',
                '2022-07-08 22:04:12',
                '2024-05-31 00:02:04',
                '5158',
                'expired'
            ],

            [
                'Ivette',
                'Garcia',
                'dguild@gordonconwell.edu',
                'Individual_Anual',
                '2022-07-08 15:56:42',
                '2024-05-31 00:02:04',
                '5156',
                'expired'
            ],

            [
                'Ivelisse',
                'Valentin',
                'ivalentinvera@gmail.com',
                'Individual_Anual',
                '2022-06-28 15:39:06',
                '2024-05-31 00:02:04',
                '5150',
                'expired'
            ],

            [
                'Narciso',
                'Montas',
                'drnarcisomontas@gmail.com',
                'Institucional_Mensual',
                '2022-06-27 11:42:32',
                '2024-06-26 19:00:19',
                '5147',
                'expired'
            ],

            [
                'Rev. Jesus Jose',
                'Martinez',
                'jessem430@gmail.com',
                'Institucional_Mensual',
                '2022-06-06 11:31:05',
                '2022-07-06 11:32:04',
                '4946',
                'expired'
            ],

            [
                'MARCO ANTONIO',
                'TORRES TORO',
                'thnsilo@gmail.com',
                'Institucional_Mensual',
                '2022-06-01 15:31:32',
                '2022-07-01 15:36:12',
                '4943',
                'expired'
            ],

            [
                'Irving',
                'Cotto',
                'icpr54@aol.com',
                'Individual_Anual',
                '2022-06-01 07:05:58',
                '2024-05-31 00:02:42',
                '4940',
                'expired'
            ],

            [
                'Arturo',
                'Rojas',
                'arturo@carismah.com',
                'Individual_Anual',
                '2022-05-30 18:14:04',
                '2024-05-31 00:02:42',
                '4924',
                'expired'
            ],

            [
                'Gonzalo',
                'Aranda',
                'gonzalo.aranda@hotmail.com',
                'Estudiante_Anual',
                '2022-05-28 19:00:00',
                '2024-08-31 00:05:00',
                '4774',
                'expired'
            ],


        ];
        Log::info("Sedder start...");
        $failedUsers = []; // To store failed user entries

        DB::beginTransaction();

        try {
            foreach ($users as $userData) {
                Log::debug("Seeder starting user loop", ['email' => $userData[2]]);

                if (!User::where('email', $userData[2])->exists()) {
                    Log::debug("Creating user", ['email' => $userData[2]]);

                    $user = User::create([
                        'name' => $userData[0] . ' ' . $userData[1],
                        'email' => $userData[2],
                        'password' => Hash::make($password),
                    ]);

                    Log::debug("User created", ['user_id' => $user->id]);

                    $user->roles()->attach($roleId);

                    Log::debug("Role attached", ['role_id' => $roleId]);

                    $membership_plan = 'Other';

                    if (strpos($userData[3], 'Institucional') !== false) {
                        $membership_plan = 'Institutional';
                    } elseif (strpos($userData[3], 'Estudiante') !== false) {
                        $membership_plan = 'Student';
                    } elseif (strpos($userData[3], 'Individual') !== false) {
                        $membership_plan = 'Individual';
                    }

                    Log::debug("Membership plan determined", ['membership_plan' => $membership_plan]);

                    $member = Member::create([
                        'user_id' => $user->id,
                        'first_name' => $userData[0],
                        'last_name' => $userData[1],
                        'email' => $userData[2],
                        'membership_plan' => $membership_plan,
                        'membership_start_date' => $userData[4],
                        'membership_end_date' => $userData[5] ?: now()->addYear(),
                        'isYear' => strpos($userData[3], 'Anual') !== false,
                        'old_membership_id' => $userData[6] ?? '0',
                        'active_status' => $userData[7] !== 'expired',
                    ]);

                    Log::debug("Member created successfully", ['member_id' => $member->id]);
                } else {
                    Log::warning("User skipped, already exists", ['email' => $userData[2]]);
                }
            }

            DB::commit();
            Log::info("Seeder completed without exception");

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Seeder failed at email: {$userData[2]} - Error: {$e->getMessage()}");
        }

    }
}
