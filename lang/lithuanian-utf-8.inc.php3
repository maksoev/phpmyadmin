<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baitų', 'Kilobaitų', 'Megabaitų', 'Gigabaitų');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Balandžio', 'Gegužio', 'Birželio', 'Liepos', 'Rugpjūčio', 'Rugsėjo', 'Spalio', 'Lapkričio', 'Gruodžio');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';
$timespanfmt = '%s d., %s val., %s min. ir %s s.';

$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strAbortedClients = 'Atmesti prisijungimai';
$strAccessDenied = 'Priėjimas uždraustas';
$strAction = 'Valdymo veiksmai';
$strAddDeleteColumn = 'Įterpti/Trinti stulpelius';
$strAddDeleteRow = 'Įterpti/Trinti požymio eilutę(es)';
$strAddNewField = 'Įterpti naują laukelį(ius)';
$strAddPriv = 'Įterpti privilegiją(as)';
$strAddPrivMessage = 'Jūs įterpėte privilegijas.';
$strAddSearchConditions = 'Įterpkite paieškos sąlygas į "where" sakinį:';
$strAddToIndex = 'Įterpti indeksui papildomus &nbsp;%s&nbsp;stulpelį(ius)';
$strAddUser = 'Sukurti naują vartotoją';
$strAddUserMessage = 'Jūs sukūrėte naują vartotoją.';
$strAdministration = 'Administracija';
$strAffectedRows = 'Pakeista eilučių:';
$strAfter = 'Prieš %s';
$strAfterInsertBack = 'Sugrįžti į buvusį puslapį';
$strAfterInsertNewInsert = 'Įterpti sekančią naują eilutę';
$strAll = 'Viską';
$strAllTableSameWidth = 'rodyti visas lenteles vienodo pločio?';
$strAlterOrderBy = 'Pakeisti lentelės rūšiavimą pagal:';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAnalyzeTable = 'Analizuoti lentelę';
$strAnd = 'IR';
$strAny = 'Bet kurį(ią)';
$strAnyColumn = 'Bet kurį stulpelį';
$strAnyDatabase = 'Bet kurią duomenų bazę';
$strAnyHost = 'Bet kurį prisijungimo adresą';
$strAnyTable = 'Bet kurią lentelę';
$strAnyUser = 'Bet kurį vartotoją';
$strAscending = 'Didėjimo tvarka';
$strAtBeginningOfTable = 'Lentelės pradžioje';
$strAtEndOfTable = 'Lentelės pabaigoje';
$strAttr = 'Atributai';

$strBack = 'Atgal';
$strBeginCut = 'KIRPIMO PRADŽIA';
$strBeginRaw = 'RAW PRADŽIA';
$strBinary = 'Dvejetainis';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBookmarkDeleted = 'Nuoroda ištrinta.';
$strBookmarkLabel = 'Nuorodos Antraštė';
$strBookmarkQuery = 'Sukurti nuoroda SQL-užklausai';
$strBookmarkThis = 'Sukurti nuorodą';
$strBookmarkView = 'Peržiūra';
$strBrowse = 'Peržiūrėti';
$strBzError = 'phpMyAdmin negalėjo suspausti lentelės struktūros atvaizdį (dump), nes šioje php versijoje neveikia Bz2 modulis. Rekomenduojame phpMyAdmin konfigūracinėje byloje <code>$cfg[\'BZipDump\']</code> direktyvą prilyginti <code>FALSE</code>. Atnaujinkite savo php versiją, jeigu norite naudotis Bz2 moduliu. Detalesnė informacija: %s.';
$strBzip = '"bzip"';

$strCannotLogin = 'Neprisijungia prie MySQL serverio';
$strCantLoadMySQL = 'negali užkrauti MySQL proceso,<br />patikrinkite PHP nustatymus.';
$strCantLoadRecodeIconv = 'Nepavyko užkrauti <em>iconv</em> arba <em>recode</em> plėtinių, reikalingų koduotės kovertavimui. Suteikite PHP teises naudotis šiais išplėtimais arba išjunkite phpMyAdmin koduotės konvertavimą. ';
$strCantRenameIdxToPrimary = 'Indeksą pervadinti PIRMINIU nepavyko!';
$strCantUseRecodeIconv = 'Kraunant plėtinių pranešimus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP konfigūraciją. ';
$strCardinality = 'Elementų skaičius';
$strCarriage = 'Grįžimo į eilutės pradžią simbolis(CR): \\r';
$strChange = 'Keisti';
$strChangeDisplay = 'Pasirinkite lauką, kurį norite peržiūrėti';
$strChangePassword = 'Pakeisti slaptažodį';
$strCharsetOfFile = 'Simbolių koduotė byloje:';
$strCheckAll = 'Pažymėti visus(as)';
$strCheckDbPriv = 'Pažymėti duomenų bazės privilegijas';
$strCheckTable = 'Patikrinti lentelę';
$strChoosePage = 'Pasirinkite puslapį redagavimui';
$strColComFeat = 'Stulpelių komentarų išvedimas';
$strColumn = 'Stulpelis';
$strColumnNames = 'Stulpelių vardai';
$strCommand = 'Komanda';
$strComments = 'Komentarai';
$strCompleteInserts = 'Visiškas įterpimas';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin negalėjo perskaityti konfigūracinės bylos!<br />Tai galėjo nutikti jeigu <u>php</u> rado byloje vykdymo klaidą arba visai nerando bylos.<br />Prašome kreiptis į konfigūracinę bylą tiesiogiai (naudojantis nuoroda žemiau) ir perskaityti gautus <u>php</u> klaidų pranešimą(us). Daugeliu atveju vienoje/keletoje eilučių truksta kabučių ir/arba kabliataškio.<br />Jeigu išvedamas tuščias naršyklės langas - viskas tvarkoje (klaidų nepastebėta).';
$strConfigureTableCoord = 'Nustatykite lentelės %s koordinates';
$strConfirm = 'Ar TIKRAI norite atlikti šį veiksmą?';
$strConnections = 'Prisijungimai';
$strCookiesRequired = 'Sausainėliai(Cookies) turi būti priimami.';
$strCopyTable = 'Kopijuoti lentelė į (duomenų bazė<b>.</b>lentelė):';
$strCopyTableOK = 'Letelė %s nukopijuota į %s.';
$strCouldNotKill = 'phpMyAdmin negalėjo išjungti %s proceso. Gali būti jog jis jau užbaigė darbą.';
$strCreate = 'Sukurti';
$strCreateIndex = 'Sukurti indeksą &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti naują indeksą';
$strCreateNewDatabase = 'Sukurti naują duomenų bazę';
$strCreateNewTable = 'Sukurti naują lentelę duomenų bazėje %s';
$strCreatePage = 'Sukurti naują puslapį';
$strCreatePdfFeat = 'PDF bylos generavimas';
$strCriteria = 'Kriterijai';

$strData = 'Duomenys';
$strDataDict = 'Duomenų žodynas';
$strDataOnly = 'Tik duomenys';
$strDatabase = 'Duomenų bazė ';
$strDatabaseHasBeenDropped = 'Duomenų bazė %s ištrinta.';
$strDatabaseWildcard = 'Duomenų bazė (galima naudoti pakaitos simbolius):';
$strDatabases = 'duomenų bazės';
$strDatabasesStats = 'Duomenų bazių statistika';
$strDefault = 'Nutylint';
$strDelete = 'Trinti';
$strDeleteFailed = 'Trynimo klaida!';
$strDeleteUserMessage = 'Jūs ištynėte vartotoją %s.';
$strDeleted = 'Eilutė ištrinta';
$strDeletedRows = 'Eilutės ištrintos:';
$strDescending = 'Mažėjimo tvarka';
$strDisabled = 'Išjungta';
$strDisplay = 'Atvaizduoti';
$strDisplayFeat = 'Išvedimo sąvybės';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizdą';
$strDoAQuery = 'Vykdyti "užklausą pagal pavyzdį" (pakaitos simbolis: "%")';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDocu = '?';
$strDrop = 'Ištrinti';
$strDropDB = 'Panaikinti duomenų bazę %s';
$strDropTable = 'Panaikinti lentelę';
$strDumpXRows = 'Išvesti %s eilučių pradedant nuo %s eilutės.';
$strDumpingData = 'Sukurta duomenų kopija lentelei';
$strDynamic = 'dinaminis';

$strEdit = 'Taisyti';
$strEditPDFPages = 'Taisyti PDF puslapius';
$strEditPrivileges = 'Taisyti privilegijas';
$strEffective = 'Efektyvus';
$strEmpty = 'Išvalyti';
$strEmptyResultSet = 'MySQL gražino tuščią rezultatų rinkinį (nėra eilučių).';
$strEnabled = 'Įjungta';
$strEnd = 'Pabaiga';
$strEndCut = 'KIRPIMO PABAIGA';
$strEndRaw = 'RAW PABAIGA';
$strEnglishPrivileges = ' Pastaba: MySQL privilegijų pavadinimai pateikiami anglų kalba';
$strError = 'Klaida';
$strExplain = 'Paaiškinti SQL užklausą';
$strExport = 'Eksportuoti';
$strExportToXML = 'Išvesti XML formatu';
$strExtendedInserts = 'Išplėstinis įterpimas';
$strExtra = 'Papildomai';

$strFailedAttempts = 'Nepavykę bandymai';
$strField = 'Laukas';
$strFieldHasBeenDropped = 'Laukas %s išmestas';
$strFields = 'Kiek laukų';
$strFieldsEmpty = ' Tuščia laukų skaičiaus reikšmė! ';
$strFieldsEnclosedBy = 'Laukų reikšmės apskliaustos  simboliais';
$strFieldsEscapedBy = 'Laukų reikšmės baigiasi simboliu';
$strFieldsTerminatedBy = 'Laukų pabaigos žymė';
$strFixed = 'fiksuotas';
$strFlushPrivilegesNote = 'Pastaba: phpMyAdmin gauna vartotojų teises tiesiai iš MySQL privilegijų lentelės. Šiose lentelėse nurodytos teisės gali skirtis nuo konfigūracinėse bylose nurodytų teisių. Todėl %sperkraukite teises%s, jeigu norite tęsti. ';
$strFlushTable = 'Išvalyti lentelę ("FLUSH")';
$strFormEmpty = 'Trūksta reikšmės formoje !';
$strFormat = 'Formatas';
$strFullText = 'Visus tekstus';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGenTime = 'Atlikimo laikas';
$strGeneralRelationFeat = 'Pagrindinės sąryšių sąvybės';
$strGlobalPrivileges = 'Globalios teisės';
$strGlobalValue = 'Globali reikšmė';
$strGo = 'Vykdyti';
$strGrantOption = 'Suteikti';
$strGrants = 'Leisti';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'išplėsta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vieną stulpelį išvedimui';
$strHome = 'Pirmas puslapis';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHomepageSourceforge = 'Parsisiųsti phpMyAdmin iš Sourceforge tinklapio';
$strHost = 'Prisijungimo adresas';
$strHostEmpty = 'Tuščias prisijungimo adresas!';

$strId = 'ID';
$strIdxFulltext = '"Fulltext" indeksas';
$strIfYouWish = 'Jei pageidaujate pakrauti keletą lentelės stulpelių, sudarykite laukų sąrašą atskirtą kabliataškiais.';
$strIgnore = 'Ignoruoti';
$strImportDocSQL = 'Importuoti docSQL bylas';
$strInUse = 'šiuo metu naudojama';
$strIndex = 'Indeksas';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strIndexes = 'Indeksai';
$strInsecureMySQL = 'Jūsų konfigūracinėje byloje yra nurodyti standartiniai nustatymai (pvz: root vartotojas be slaptažožio). Taip sukonfiguruotas MySQL serveris yra nesaugus, bei gali būti atviras įsilaužimams, todėl rekomenduojame pakeisti šiuos nustatymus.';
$strInsert = 'Įterpti';
$strInsertAsNewRow = 'Įterpti naują įrašą';
$strInsertNewRow = 'Įterpti naują eilutę';
$strInsertTextfiles = 'Įterpti duomenis iš tekstinio failo į lentelę';
$strInsertedRows = 'Įterptą eilučių:';
$strInstructions = 'Instrukcijos';
$strInvalidName = '"%s" rezervuotas žodis, Jūs negalite šio žodžio naudoti kaip duomenų bazės, lentelės arba laukelio vardo.';

$strKeepPass = 'Nekeisti slaptažodžio';
$strKeyname = 'Raktinis žodis';
$strKill = 'Stabdyti procesą';

$strLaTeX = 'LaTeX';
$strLandscape = 'Peizažinis';
$strLength = 'Ilgis';
$strLengthSet = 'Ilgis/reikšmės*';
$strLimitNumRows = 'Eilučių skaičius puslapyje';
$strLineFeed = 'Eilutės: \\n';
$strLines = 'Eilučių';
$strLinesTerminatedBy = 'Eilutės pabaigos žymė';
$strLinkNotFound = 'Sąryšis nerastas';
$strLinksTo = 'Sąryšis su';
$strLocationTextfile = 'Tekstiniai SQL užklausų failai';
$strLogPassword = 'Slaptažodis:';
$strLogUsername = 'Vartotojo vardas:';
$strLogin = 'Įsiregistruoti';
$strLogout = 'Išsiregistruoti';

$strMissingBracket = 'Trūksta skliausto(ų)';
$strModifications = 'Pakeitimai išsaugoti';
$strModify = 'Keisti';
$strModifyIndexTopic = 'Keisti indeksą';
$strMoreStatusVars = 'Daugiau būsenos kintamųjų';
$strMoveTable = 'Perkelti lentelė į (duomenų bazė<b>.</b>lentelė):';
$strMoveTableOK = 'Lentelė %s perkelta į %s.';
$strMySQLCharset = 'MySQL koduotė';
$strMySQLReloaded = 'MySQL procesas perkrautas.';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLServerProcess = 'MySQL %pma_s1% procesas serveryje %pma_s2%. Įregistruotas vartotojas %pma_s3%';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos būseną';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNo = 'Ne';
$strNoDatabases = 'Nėra duomenų bazių';
$strNoDescription = 'Aprašymo nėra';
$strNoDropDatabases = '"DROP DATABASE" komandos įvykdyti negalima.';
$strNoExplain = 'Praleisti SQL užklausos aiškinimą';
$strNoFrames = 'phpMyAdmin draugiškesnis su <b>rėmelius</b> palaikančiomis naršyklėmis.';
$strNoIndex = 'Neaprašyti indeksai!';
$strNoIndexPartsDefined = 'Neaprašytos indekso dalys!';
$strNoModification = 'Nėra pakeitimų';
$strNoPassword = 'Nėra slaptažodžio';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'Nėra privilegijų';
$strNoQuery = 'Nėra SQL užklausos!';
$strNoRights = 'Neturite pakankamai teisių';
$strNoTablesFound = 'Duomenų bazėje nerasta lentelių.';
$strNoUsersFound = 'Nerasta vartotojo(ų).';
$strNoValidateSQL = 'Praleisti SQL užklausos tikrinimą';
$strNone = 'Nėra';
$strNotNumber = 'Įveskite skaičių!';
$strNotOK = 'Negerai';
$strNotSet = 'Lentelė <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNotValidNumber = ' netinkamas eilutės numeris!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentelėje <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';
$strNumTables = 'Lentelės';

$strOK = 'Gerai';
$strOftenQuotation = 'Dažnai kartojasi kabutės. Pasirinktinai reiškia, kad tik  char ir varchar laukai yra uždaryti kabutėmis.';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti lentelę';
$strOptionalControls = 'Pasirinktinai. Kontroliuojama kaip skaitoma, rašoma specialiuosius simbolius.';
$strOptionally = 'Pasirinktinai';
$strOptions = 'Parinktys';
$strOr = 'Arba';
$strOverhead = 'Perteklinis';

$strPHP40203 = 'Jūs naudojate PHP 4.2.3 versiją, kurioje yra rimta klaida, susiijusi su daugiabaičiais stringais (mbstring). Daugiau informacijos rasite PHP klaidų pranešime Nr.19404. <strong>NEREKOMENDUOJAME naudoti šios PHP versijos su phpMyAdmin</strong>.';
$strPHPVersion = 'PHP versija';
$strPageNumber = 'Puslapis:';
$strPartialText = 'Daliniai tekstai';
$strPassword = 'Slaptažodis';
$strPasswordEmpty = 'Tuščias slaptažodis!';
$strPasswordNotSame = 'Slaptažodžiai nesutampa!';
$strPdfDbSchema = 'Duomenų bazės "%s" schema - %s puslapis';
$strPdfInvalidPageNum = 'Nenurodytas PDF puslapio numeris!';
$strPdfInvalidTblName = 'Lentelė "%s" neegzistuoja!';
$strPdfNoTables = 'No tables';
$strPerHour = 'per valandą';
$strPhp = 'Sukurti PHP kodą';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia konfigūraciniame faile įrašyti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reikšmę!';
$strPortrait = 'Portretinis';
$strPos1 = 'Pradžia';
$strPrevious = 'Praėjęs';
$strPrimary = 'Pirminis';
$strPrimaryKey = 'Pirminis raktas';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi būti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrint = 'Spausdinti';
$strPrintView = 'Atspausdinti struktūra';
$strPrivDescAllPrivileges = 'Įtraukti visas teises, išskyrus GRANT.';
$strPrivDescAlter = 'Leisti keisti jau egzistuojančių lenetelių struktūrą.';
$strPrivDescCreateDb = 'Leisti kurti naujas duomenų bazes ir lenteles.';
$strPrivDescCreateTbl = 'Leisti kurti naujas lenteles.';
$strPrivDescCreateTmpTable = 'Leisti kurti laikinas lenteles.';
$strPrivDescDelete = 'Leisti šalinti duomenis.';
$strPrivDescDropDb = 'Leisti trinti duomenų bazes ir lenteles.';
$strPrivDescDropTbl = 'Leisti trinti lenteles.';
$strPrivDescExecute = 'Leisti vykdyti išsaugotas procedūras; Negalioja šioje MySQL versijoje.';
$strPrivDescFile = 'Leisti įterpti ir eksportuoti duomenis iš bylų.';
$strPrivDescGrant = 'Leisti įterpti naujus vartotojus, bei prisikirti privilegijas, neperkraunant privilegijų lentelės.';
$strPrivDescIndex = 'Leisti įterpti ir modifikuoti indeksus.';
$strPrivDescInsert = 'Leisti įterpti ir modifikuoti duomenis.';
$strPrivDescLockTables = 'Leisti užrakinti lenteles procesų metu.';
$strPrivDescMaxConnections = 'Riboti prisijungimų kiekį per valandą.';
$strPrivDescMaxQuestions = 'Riboti užklausų kiekį per valandą';
$strPrivDescMaxUpdates = 'Riboti komandų (kurios vienaip ar kitaip modifikuoja lenteles ar duomenų bazes) kiekį per valandą.';
$strPrivDescProcess3 = 'Leisti išjungti kitų vartotojų procesus.';
$strPrivDescProcess4 = 'Leisti peržiūrėti procesų sąraše pilną užklausų sąrašą.';
$strPrivDescReferences = ' Negalioja šioje MySQL versijoje.';
$strPrivDescReload = 'Leisti perkrauti serverį, bei išvalyti serverio laikinąją atmintį (cache).';
$strPrivDescReplClient = 'Leisti vartotojo užklausas dėl atstatymo master / slave serverių.';
$strPrivDescReplSlave = 'Reikalinga atstatymo slave serveriui';
$strPrivDescSelect = 'Leisti skaityti duomenis.';
$strPrivDescShowDb = 'Suteikti prieigą prie visų duomenų bazių.';
$strPrivDescShutdown = 'Leisti išjungti serverį.';
$strPrivDescSuper = 'Leisti prisijungti, kai viršytas prisijungimų kiekis; Reikalinga daugumai administratoriaus darbų, tokių kaip globalių reikšmių modifikavimui ar vartotojų atjungimui.';
$strPrivDescUpdate = 'Leisti modifikuoti duomenis.';
$strPrivDescUsage = 'Be teisių.';
$strPrivileges = 'Privilegijos';
$strPrivilegesReloaded = 'Teisės sėkmingai perkrautos.';
$strProcesslist = 'Procesų sąrašas';
$strProperties = 'Nustatymai';
$strPutColNames = 'Stulpelių pavadinimus įrašyti pirmoje eilutėje';

$strQBE = 'Užklausa pagal pavyzdį';
$strQBEDel = 'Pakeičiant';
$strQBEIns = 'Įterpiant';
$strQueryOnDb = 'SQL-užklausa duomenų bazėje <b>%s</b>:';
$strQueryStatistics = '<b>Užklausų statistika</b>: nuo paleidimo dienos buvo išsiųsta %s užklausų į serverį.';
$strQueryType = 'Užklausos tipas';

$strReType = 'Įveskite dar kartą';
$strReceived = 'Gauta';
$strRecords = 'Viso įrašų:';
$strReferentialIntegrity = 'Patikrinti sąryšių vientisumą:';
$strRelationNotWorking = 'Atsisakyta papildomų nustatymų, leidžiančių dirbti su jungtinėmis lentelėmis. %sPaaiškinimas%s.';
$strRelationView = 'Peržiūrėti sąryšius';
$strRelationalSchema = 'Ryšių schema';
$strReloadFailed = 'MySQL procesą perkrauti nepavyko.';
$strReloadMySQL = 'Perkrauti MySQL procesą';
$strRememberReload = 'Neužmirškite perkrauti serverį.';
$strRenameTable = 'Pervadinti lentelę į';
$strRenameTableOK = 'Lentelė %s pervadinta į %s';
$strRepairTable = 'Taisyti lentelę';
$strReplace = 'Pakeisti';
$strReplaceTable = 'Pakeisti lentelės turinį failo duomenimis ';
$strReset = 'Nustatyti į pradinę būseną';
$strResourceLimits = 'Išteklių apribojimai';
$strRevoke = 'Panaikinti';
$strRevokeGrant = 'Panaikinti GRANT privilegiją';
$strRevokeGrantMessage = 'Jūs panaikinote GRANT privilegiją %s';
$strRevokeMessage = 'Jūs panaikinote privilegijas %s';
$strRevokePriv = 'Panaikinti privilegijas';
$strRowLength = 'Eilutės ilgis';
$strRowSize = 'Eilutės dydis';
$strRows = 'Eilutės';
$strRowsFrom = 'eilučių pradedant nuo';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'išdėstant  %s pakartoti antraštes kas %s įrašų';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilučių statistika';
$strRunQuery = 'Vykdyti užklausą';
$strRunSQLQuery = 'Vykdyti SQL užklausą(as) duomenų bazėje %s';
$strRunning = 'adresu %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Klaidą SQL interpretatoriuje. Prašome patikrinti  ar SQL užklausoje teisingai naudojamos kabutės. Kita, galima klaida, jog Jūs bandote atsiųsti dvejetainius (binary) duomenis neapskliaustus kabutėmis. Taip pat Jūs galite pabandyti įvykdyti savo užklausą iš MySQL konsolės. MySQL serverio išvesta informacija apie klaidą (jeigu tokių bus) gali padėti Jums nustatyti klaidos priežastį. Jeigu užklausa sėkmingai įvykdoma konsolėje, o SQL interpretatorius vistiek išveda pranešimus apie klaidas, prašome supaprastinite savo SQL užklausą ir perduodamų duomenų kiekį užklausoje ir praneškite apie klaidą programos kūrėjams su žemiau pateikiama informacija:';
$strSQLParserUserError = 'Klaida SQL užklausoje. Žemiau išvestas MySQL serverio pranešimas (jeigu toks yra), turėtų padėti Jums nustatyti klaidos priežastį';
$strSQLQuery = 'SQL- užklausa';
$strSQLResult = 'SQL rezultatas';
$strSQPBugInvalidIdentifer = 'Klaidingas vardas';
$strSQPBugUnclosedQuote = 'Trūksta uždaromosios kabutės';
$strSQPBugUnknownPunctuation = 'Klaidinga skyryba';
$strSave = 'Išsaugoti';
$strScaleFactorSmall = 'Dydžio matas yra per mažas norint sutalpinti vaizdą viename lape.';
$strSearch = 'Paieška';
$strSearchFormTitle = 'Paieška duomenų bazėje';
$strSearchInTables = 'Lentelės(ių) viduje:';
$strSearchNeedle = 'Paieškos žodis(iai) arba reikšmė(ės) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas iš žodžių';
$strSearchOption2 = 'visi žodžiai';
$strSearchOption3 = 'ištisa frazė';
$strSearchOption4 = 'kaip reguliarųjį išsireiškimą';
$strSearchResultsFor = 'Paieškos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSelect = 'Išrinkti';
$strSelectADb = 'Pasirinkti duomenų bazę';
$strSelectAll = 'Išrinkti visas(us)';
$strSelectFields = 'Pasirinkti laukus (nors vieną)';
$strSelectNumRows = 'užklausą vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'Išsaugoti į failą';
$strSent = 'Siųsta';
$strServer = 'Darbinė stotis %s';
$strServerChoice = 'Pasirinkti serverį';
$strServerStatus = 'Veikimo informacija';
$strServerStatusUptime = 'MySQL serverio veikimo trukmė: %s. Serveris pradėjo veikti: %s.';
$strServerTabProcesslist = 'Procesai';
$strServerTabVariables = 'Kintamieji';
$strServerTrafficNotes = '<b>Serverio apkrovimas</b>: šiose lentelėse saugoma statistinė informacija apie MySQL serverio apkrovimą nuo paleidimo dienos.';
$strServerVars = 'Serverio kintamieji ir nustatymai';
$strServerVersion = 'Serverio versija';
$strSessionValue = 'Sesijos reikšmė';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomenų reikšmes reikia įvesti naudojant šį formatą: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia įrašyti dešininį įžambųjį brūkšnį ("\") arba kabutes("\'"), tuomet prieš šios simbolius reikia papildomo dešininio įžambaus brūkšnio (pavyzdžiui: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Rodyti';
$strShowAll = 'Rodyti viską';
$strShowColor = 'Rodyti spalvą';
$strShowCols = 'Rodyti stulpelius';
$strShowDatadictAs = 'Duomenų žodyno formatas';
$strShowGrid = 'Rodyti tinklelį';
$strShowPHPInfo = 'Rodyti PHP informaciją';
$strShowTableDimension = 'Rodyti lentelių dydžius';
$strShowTables = 'Rodyti lentelės';
$strShowThisQuery = ' Rodyti šią užklausą vėl ';
$strShowingRecords = 'Rodomi įrašai';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSort = 'Rūšiuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSplitWordsWithSpace = 'Žodžiai atskirti tarpo simboliu (" ").';
$strStatement = 'Parametrai';
$strStatus = 'Statusas';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Struktūra ir duomenys';
$strStrucDrop = 'Panaikinti-įterpti lentelę';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucOnly = 'Tik struktūrą';
$strStructPropose = 'Analizuoti lentelės struktūrą';
$strStructure = 'Struktūra';
$strSubmit = 'Siųsti';
$strSuccess = 'Jūsų SQL užklausa sėkmingai įvykdyta';
$strSum = 'Sumos';

$strTable = 'Lentelė';
$strTableComments = 'Lentelės komentarai';
$strTableEmpty = 'Tuščias lentelės vardas!';
$strTableHasBeenDropped = 'Lentelė %s panaikinta';
$strTableHasBeenEmptied = 'Lentelės reikšmės %s ištuštintos';
$strTableHasBeenFlushed = 'Lentelės buferis  %s išvalytas';
$strTableMaintenance = 'Lentelės diagnostika';
$strTableOfContents = 'Turinys';
$strTableStructure = 'Sukurta duomenų struktūra lentelei';
$strTableType = 'Lentelės tipas';
$strTables = '%s lentelė(s)';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> šis laukelis neredaguojamas ';
$strTheContent = 'Jūsų failo turinys įterptas.';
$strTheContents = 'Failo turinys įterpus panaikina išrinktos lentelės ar stulpelio turinį, bet išlieka unikalūs ir pirminiai indeksai.';
$strTheTerminator = 'Laukų pabaigos žymė.';
$strThreadSuccessfullyKilled = '%s buvo sėkmingai išjungtas.';
$strTime = 'Laikas';
$strTotal = ' iš viso ';
$strTotalUC = 'Viso';
$strTraffic = 'Apkrovimas';
$strType = 'Tipas';

$strUncheckAll = 'Nepažymėti visus(as)';
$strUnique = 'Unikalus';
$strUnselectAll = 'Nepažymėti visus(as)';
$strUpdatePrivMessage = 'Jūs pakeitėte privilegijas  %s.';
$strUpdateProfile = 'Papildyti profilį:';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti užklausą';
$strUsage = 'Išnaudota';
$strUseBackquotes = 'Lentelių ir laukų vardams naudoti šias kabutes ` `';
$strUseTables = 'Naudoti lenteles';
$strUser = 'Vartotojas';
$strUserEmpty = 'Tuščias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUserOverview = 'Vartotojų peržiūra';
$strUsers = 'Vartotojai';

$strValidateSQL = 'Patikrinti SQL užklausą';
$strValidatorError = 'Neveikia SQL interpretatorius. Prašome patikrinkite ar yra suinstaliuoti visi privalomi php moduliai, nurodyti %sdokumentacijoje%s.';
$strValue = 'Reikšmė';
$strVar = 'Kintamasis';
$strViewDump = 'Peržiūrėti lentelės struktūros atvaizdį';
$strViewDumpDB = 'Sukurti, peržiūrėti duomenų bazės atvaizdį';

$strWebServerUploadDirectory = 'www-serverio katalogas atsiuntimams';
$strWebServerUploadDirectoryError = 'Nepasiekimas nurodytas www-serverio katalogas atsiuntimams.';
$strWelcome = 'Jūs naudojate %s';
$strWithChecked = 'Pasirinktas lenteles:';
$strWrongUser = 'Neteisingas vartotojo vardas arba slaptažodis. Priėjimas uždraustas.';

$strYes = 'Taip';

$strZeroRemovesTheLimit = 'Pastaba: Nėra jokių apribojimų jeigu reikšmė nurodyta lygi 0 (nuliui).';
$strZip = '"zip"';

// To translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
?>
