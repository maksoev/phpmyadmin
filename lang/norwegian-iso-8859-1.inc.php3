<?php
/* $Id$ */

/**
 * Translated by Sven-Erik Andersen <sven_erik at andersen.as>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('S�n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';
$timespanfmt = '%s dager, %s timer, %s minutter og %s sekunder';

$strAbortedClients = 'Avbrutt';
$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterierad';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegium';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegium.';
$strAddSearchConditions = 'Legg til s�kekriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks &nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAdministration = 'Administrasjon';
$strAffectedRows = 'Ber�rte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabellrekkef�lge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'Og';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAPrimaryKey = 'En prim�rn�kkel har blitt lagt til %s';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';

$strBack = 'Tilbake';
$strBeginCut = 'START KUTT';
$strBeginRaw = 'START R�';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - m� ikke redigeres ';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-sp�rring';
$strBookmarkThis = 'Lagre denne SQL-sp�rringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se p�';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpede data fordi Bz2 tillegget til denne php versjonen er �delagt. Vi anbefaler p� det sterkeste at du setter <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurasjonsfil til <code>FALSE</code>. Hvis du �nsker � bruke Bz2 komprimerings funksjonene, s� b�r du oppgradere til en nyere php versjon. Se php bug rapport %s for detaljer.';
$strBzip = 'Komprimert (bz2)';

$strCannotLogin = 'Kan ikke logge inn til MySQL tjeneren';
$strCantLoadMySQL = 'kan ikke starte MySQL-modulen,<br />vennligst kontroller PHP-konfigureringen.';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv- eller recode-modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller sl� av tegnsettkonvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv eller recode_string funksjonene selv om modulene sier de er lastet. Sjekk din php-konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Linjeskift (Mac): \\r';
$strChange = 'Endre';
$strChangeDisplay = 'Velg felt for visning';
$strChangePassword = 'Endre passord';
$strCharsetOfFile = 'Filens tegnsett:';
$strCheckAll = 'Merk alle';
$strCheckDbPriv = 'Kontroller databaseprivilegier';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColComFeat = 'Vis kolonnekommentarer';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Komplette innlegg';
$strCompression = 'Kompresjon';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil f�. I de fleste tilfeller s� mangler det et anf�rselstegn eller et semikolon et sted.<br />Hvis du f�r en blank side s� er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConfirm = '�nsker du virkelig � gj�re det?';
$strConnections = 'tilkoblinger';
$strCookiesRequired = 'Cookies m� v�re sl�tt p� forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCouldNotKill = 'phpMyAdmin kunne ikke avslutte tr�d %s. Den er sansynligvis alt avsluttet.';
$strCreate = 'Opprett';
$strCreateIndex = 'Lag en indeks p�&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreatePage = 'Lag en ny side';
$strCreatePdfFeat = 'Lag PDF-dokumenter';
$strCriteria = 'Kriterier';

$strData = 'Data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabases = 'databaser';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabaseWildcard = 'Database (asterisk er tillatt):';
$strDataDict = 'Dataordbok';
$strDataOnly = 'Bare data';
$strDefault = 'Standard';
$strDelete = 'Slett';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleteFailed = 'Slettingen mislyktes!';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDescending = 'Synkende';
$strDisabled = 'Avsl�tt';
$strDisplay = 'Vis';
$strDisplayFeat = 'Vis egenskaper';
$strDisplayOrder = 'Visningsrekkef�lge:';
$strDisplayPDF = 'Vis PDF-skjema';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen %s';
$strDropTable = 'Slett tabell';
$strDumpingData = 'Dataark for tabell';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF-sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL returnerte tomt resultat (m.a.o. ingen rader).';
$strEnabled = 'P�sl�tt';
$strEnd = 'Slutt';
$strEndCut = 'STOPP KUTT';
$strEndRaw = 'STOPP R�';
$strEnglishPrivileges = 'OBS: MySQL privilegiumnavn er p� engelsk';
$strError = 'Feil';
$strExplain = 'Forklar SQL';
$strExport = 'Eksporter';
$strExportToXML = 'Eksporter til XML format';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Feilede fors�k';
$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFixed = 'statisk';
$strFlushPrivilegesNote = 'Merk: phpMyAdmin f�r brukerprivilegiene direkte fra MySQL privilegietabeller. Innholdet i disse tabellene kan v�re forskjellig fra de privilegiene serveren bruker hvis det er utf�rt manuelle endringer p� den. I s� fall b�r du %soppfriske privilegiene%s f�r du fortsetter.';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenBy = 'Generert av';
$strGeneralRelationFeat = 'Generelle relasjonsegenskaper';
$strGenTime = 'Generert den';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global verdi';
$strGo = 'Utf�r';
$strGrantOption = 'Rettighet';
$strGrants = 'Rettigheter';
$strGzip = 'Komprimert (gz)';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du m� velge minst en kolonne for visning';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin-hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin-nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';

$strId = 'ID';
$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du kun �nsker � lese inn enkelte av tabellens kolonner, angi en kommaseparert feltliste.';
$strIgnore = 'Ignorer';
$strImportDocSQL = 'Importer docSQL-filer';
$strIndex = 'Indeks';
$strIndexes = 'Indekser';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strInsecureMySQL = 'Din konfigurasjonsfil inneholder innstillinger (root uten passord) som korrensponderer med MySQLs standard priviligerte brukerkonto. Din MySQL-tjener kj�rer med denne standardinnstillingen, er �pen for misbruk, og du burde fikse dette sikkerhetshullet snarest.';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertedRows = 'Innsatte rader:';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInstructions = 'Instruksjoner';
$strInUse = 'i bruk';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database-, tabell- eller feltnavn.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'N�kkel';
$strKill = 'Avslutt';

$strLandscape = 'Landskapsformat';
$strLaTeX = 'LaTeX';
$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLocationTextfile = 'Plassering av filen';
$strLogin = 'Logg inn';
$strLogout = 'Logg ut';
$strLogPassword = 'Passord:';
$strLogUsername = 'Brukernavn:';

$strMissingBracket = 'Manglende parantes';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoreStatusVars = 'Flere status variabler';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMySQLCharset = 'MySQL-tegnsett';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kj�rer p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL driftsstatus';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoDatabases = 'Ingen databaser';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE"-uttrykk er avsl�tt.';
$strNoExplain = 'Ikke forklar SQL';
$strNoFrames = 'phpMyAdmin er mer brukervennlig med en <b>rammekapabel</b> nettleser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeksdeler definert!';
$strNoModification = 'Ingen endring';
$strNone = 'Ingen';
$strNoPassword = 'Intet passord';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL sp�rring!';
$strNoRights = 'Du har ikke nok rettigheter til � v�re her n�!';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotOK = 'ikke OK';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNotValidNumber = ' er ikke et gyldig radnummer!';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNoValidateSQL = 'Ikke teste SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';
$strNumTables = 'Tabeller';

$strOftenQuotation = 'Ofte anf�rselstegn. Valgfritt inneb�rer at kun tekstfelter ("char" og "varchar"-felter) er omfattet av tegnet.';
$strOK = 'OK';
$strOperations = 'Operasjoner';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';

$strPageNumber = 'Sidenummer:';
$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPdfDbSchema = 'Skjema for "%s"-databasen - Side %s';
$strPdfInvalidPageNum = 'Undefinert PDF-sidenummer!';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPerHour = 'per time';
$strPhp = 'Lag PHP kode';
$strPHP40203 = 'Du bruker PHP 4.2.3, som har en alvorlig feil med flerbyte-strenger (mbstring). Se PHP-feilrapport 19404. Denne versjonen av PHP er ikke anbefalt for bruk med phpMyAdmin.';
$strPHPVersion = 'PHP-Versjon';
$strPmaDocumentation = 'phpMyAdmin-Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen M� v�re innstilt i din konfigurasjonsfil!';
$strPortrait = 'Portrettformat';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rn�kkel';
$strPrimaryKeyHasBeenDropped = 'Prim�rn�kkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  prim�rn�kkelen m� v�re... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�</b> v�re navnet til og <b>bare til</b> en prim�rn�kkel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsvennlig forh�ndsvisning';
$strPrivDescAllPrivileges = 'Inkluder alle privilegier unntatt GRANT.';
$strPrivDescAlter = 'Tillater endring av struktur p� eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillater oppretting av nye databaser og tabeller.';
$strPrivDescCreateTbl = 'Tillater oppretting av nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillater oppretting av midlertidige tabeller.';
$strPrivDescDelete = 'Tillater sletting av data.';
$strPrivDescDropDb = 'Tillater sletting av databaser og tabeller.';
$strPrivDescDropTbl = 'Tillater sletting av tabeller.';
$strPrivDescExecute = 'Tillater kj�ring av lagrede prosedyrer; har ingen effekt p� denne versjonen av MySQL.';
$strPrivDescFile = 'Tillater import og eksport av data til og fra filer.';
$strPrivDescGrant = 'Tillater � legge til brukere og privilegier uten � oppfriske privilegietabellene.';
$strPrivDescIndex = 'Tillater oppretting og sletting av indekser.';
$strPrivDescInsert = 'Tillater � legge til og erstatte data.';
$strPrivDescLockTables = 'Tillater l�sing av tabeller for den kj�rende tr�den.';
$strPrivDescMaxConnections = 'Begrenser antall nye tilkoblinger brukeren kan �pne per time.';
$strPrivDescMaxQuestions = 'Begrenser antall sp�rringer brukeren kan sende til serveren per time.';
$strPrivDescMaxUpdates = 'Begrenser antall kommandoer som kan endre tabeller eller databaser brukeren kan utf�re per time.';
$strPrivDescProcess3 = 'Tillater avslutting av prosesser som tilh�rer andre brukere.';
$strPrivDescProcess4 = 'Tillater visning av komplette sp�rringer i prosesslisten.';
$strPrivDescReferences = 'har ingen effekt i denne versjonen av MySQL.';
$strPrivDescReplClient = 'Gir tillatelse til brukeren til � sp�rre hvor replikasjonsslaver eller -tjenere er.';
$strPrivDescReplSlave = 'Trenges av replikasjonsslavene.';
$strPrivDescReload = 'Tillater oppfrisking av tjenerinnstillinger og oppfrisking av mellomlager.';
$strPrivDescSelect = 'Tillater lesing av data.';
$strPrivDescShowDb = 'Gir adgang til komplett liste over databaser.';
$strPrivDescShutdown = 'Tillater avslutting av tjener.';
$strPrivDescSuper = 'Tillater tilkobling, selv om maksimum tilkoblinger er n�dd. Beh�ves for de fleste administrative operasjoner som � sette globale variabler eller avslutting av andre brukeres tr�der.';
$strPrivDescUpdate = 'Tillater endring av data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Oppfriskingen av privilegiene lyktes.';
$strProcesslist = 'Prosess liste';
$strProperties = 'Egenskaper';
$strPutColNames = 'Sett inn feltnavn i f�rste rad';

$strQBE = 'Sp�rring ved eksempel (Query by Example)';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryOnDb = 'SQL-sp�rring i database <b>%s</b>:';
$strQueryStatistics = '<b>Sp�rrings statistikk</b>: Siden oppstart, har %s sp�rringer blitt sendt til tjeneren.';
$strQueryType = 'Sp�rringstype';

$strReceived = 'Mottatt';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanseintegritet:';
$strRelationalSchema = 'Relasjonsskjema';
$strRelationNotWorking = 'Tilleggsfunksjonene for � kunne jobbe med koblede tabeller er deaktivert. For � finne ut hvorfor, klikk %sher%s.';
$strRelationView = 'Relasjonsvisning';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strRememberReload = 'Husk � restarte tjeneren.';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har f�tt nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'T�m skjema';
$strResourceLimits = 'Ressursbegrensninger';
$strReType = 'Gjenta';
$strRevoke = 'Tilbakekall';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant-privilegiet til %s';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Radlengde';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowSize = ' Radst�relse ';
$strRowsModeHorizontal= 'vannrett';
$strRowsModeOptions= 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical= 'loddrett';
$strRowsStatistic = 'Radstatistikk';
$strRunning = 'som kj�rer p� %s';
$strRunQuery = 'Kj�r sp�rring';
$strRunSQLQuery = 'Kj�r SQL sp�rring/sp�rringer mot databasen %s';

$strSave = 'Lagre';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til � romme alt p� en side';
$strSearch = 'S�k';
$strSearchFormTitle = 'S�k i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) � s�ke etter (wildcard: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den n�yaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'S�keresultat for "<i>%s</i>" %s:';
$strSearchType = 'Finn:';
$strSelect = 'Sp�rring';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i sp�rring';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strSent = 'Sendt';
$strServer = 'Server %s';
$strServerChoice = 'Servervalg';
$strServerStatus = 'Kj�ringsinformasjon';
$strServerStatusUptime = 'Denne MySQL tjeneren har kj�rt i %s. Den startet opp den %s.';
$strServerTabProcesslist = 'Prosesser';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Servertraffikk</b>: Disse tabellene viser statistikk over nettverkstrafikken for denne MySQL-tjeneren siden dens oppstart.';
$strServerVars = 'Servervariabler og -innstillinger';
$strServerVersion = 'Serverversjon';
$strSessionValue = '�kts verdi';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge � ha en skr�strek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skr�strek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowCols = 'Vis kolonner';
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strShowGrid = 'Vis rutenett';
$strShowingRecords = 'Viser rader ';
$strShowPHPInfo = 'Vis PHP-informasjon';
$strShowTableDimension = 'Vis tabelldimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne sp�rring her igjen ';
$strSingly = '(enkeltvis)';
$strSize = 'St�rrelse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plassbruk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Det er en mulighet for at du har funnet en feil i SQL-parseren. Vennligst kontroller din sp�rring n�ye og kontroller at anf�rselstegn er korrekte og matsjer hverandre. En annen mulig feil�rsak kan v�re at du overf�rer en fil med bin�rkode som ikke ligger innenfor anf�rselstegn. Du kan ogs� teste din sp�rring i MYSQLs kommandolinjegrensesnitt. Feilmeldingen fra MySQL-tjeneren nedenfor, hvis det var en, kan ogs� hjelpe deg med � analysere problemet. Hvis du fortsatt har problemer eller parseren feiler hvor kommandolinjegrensesnittet lyktes, vennligst reduser din SQL-sp�rring til den sp�rringen som for�rsaker problemet og send en feilrapport med datastykket i CUT-seksjonen nedenfor:';
$strSQLParserUserError = 'Det ser ut til � v�re en feil i din SQL-sp�rring. En eventuell feilmelding fra MySQL-tjeneren er skrevet ut nedenfor, kan kanskje hjelpe deg med � finne feilen.';
$strSQLQuery = 'SQL-sp�rring';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugUnclosedQuote = 'Anf�rselstegnet er ikke lukket';
$strSQPBugUnknownPunctuation = 'Ukjent tegnsettingsstreng';
$strStatement = 'Oversikt';
$strStatus = 'Status';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foresl� tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/sp�rringen er utf�rt';
$strSum = 'Sum';

$strTable = 'Tabell';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt t�mt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabellvedlikehold';
$strTableOfContents = 'Innholdsfortegnelse';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabellstruktur for tabell';
$strTableType = 'Tabelltype';
$strTextAreaLength = ' P� grunn av sin lengde,<br /> s� vil muligens dette feltet ikke v�re redigerbart ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt p� felt.';
$strThreadSuccessfullyKilled = 'Tr�d %s ble avsluttet med suksess.';
$strTime = 'Tid';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraffic = 'Trafikk';
$strType = 'Type';

$strUncheckAll = 'Fjern merking';
$strUnique = 'Unik';
$strUnselectAll = 'Fjern alle valgte';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater sp�rring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anf�rselstegn med tabell og feltnavn';
$strUser = 'Bruker';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUserOverview = 'Brukeroversikt';
$strUsers = 'Brukere';
$strUseTables = 'Bruk tabeller';

$strValidateSQL = 'Test SQL';
$strValidatorError = 'SQL-kontrolleren kunne ikke startes. Vennligst sjekk at du har installert de n�dvendige php-tilleggene som beskrevet i %sdokumentasjonen%s.';
$strValue = 'Verdi';
$strVar = 'Variabler';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';

$strWebServerUploadDirectory = 'webtjener opplastingskatalog';
$strWebServerUploadDirectoryError = 'Katalogen du anga for opplasting kan ikke n�es';
$strWelcome = 'Velkommen til %s';
$strWithChecked = 'Med avkrysset:';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Merk: Ved � sette disse til 0 (null) fjerner begrensningen.';
$strZip = 'Komprimert (zip)';
// To translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
?>
