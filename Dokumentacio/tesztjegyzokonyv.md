# Tesztjegyzőkönyv
|Sorszám|Tesztelő neve, Neptun kódja|Funkció|Tesztelés módja, leírása|Eredmény|
|-------|---------------------------|-------|------------------------|--------|
|1.|Faragó Zsófia (B118Z5)|Kártevőirtás: adatbázis-kapcsolat|Az adatbázisszerverhez való kapcsolódás tesztelése, próba írási és olvasási műveletek végrehajtása MySQL Workbench segítségével.|Sikeres kapcsolódás a távoli szerverhez, sikeres műveletek.|
|2.|Faragó Zsófia (B118Z5)|Kártevőirtás: árajánlat|Az adatbázisban lekérdezések segítségével ellenőriztem, valóban minden adatbázisban szereplő információ elérhető-e a főoldalon lévő árajánlatban.|Sikeres: minden adat megjelenik a főoldalon, amely a vásárlókat az árakról tájékoztatja.|
|3.|Faragó Zsófia (B118Z5)|Kártevőirtás: kártevők adatainak megjelenítése|Az adatbázisban lekérdezések segítségével ellrnőriztem, mennyire felelnek meg az adatbázisban tárolt adatok a kártevőkről, mint ami a Kártevők menüpontban látható.|Sikeres.|
|4.|Faragó Zsófia (B118Z5)|Kártevőirtás: regisztráció|Regisztrációs űrlap kitöltése először minden szükséges adattal, utána hiányzó adatokkal, majd a visszajelzés és az adatbázisban létrejött rekord ellenőrzése|Sikeres: A felület figyelmezteti a felhasználót, ha nem adott meg minden adatot, illetve tájékoztatja, ha sikeres volt, és az adatbázisba bekerülnek a megfelelő rekordok|
|5.|Faragó Zsófia (B118Z5)|Kártevőirtás: megrendelés funkció|A regisztrált email cím és jelszó megadása után az űrlap kitöltése. Először helyesen töltöttem ki, másodszor rossz jelszót, harmadszor hiányos adatokat adtam meg.|Sikeres: rossz jelszó és hiányos adatok esetén a megfelelő üzenetet adta a felület, heles kitöltés esetén bekerült az adatbázisba a rekord. Hiányosság: nem kap megfelelő visszajelzést a felhasználó a helyes megrendelésről.|
|6.|Faragó Zsófia (B118Z5)|Kártevőirtás: reszponzív stíluslap|Megjelenítettem a weboldalt különböző, gyakran használt ablakméretekben.|Minden felbontás esetén a tartalom igazodik a képernyő szélességéhez.|
|7.|Faragó Zsófia (B118Z5)|Kártevőirtás: adatok tárolása az adatbázisban|A regisztráció és megrendelés során megadott minden város, illetve lakcím csak egyszer tárolódik el, ha már szerepel az adatbázisban, akkor ez újra nem kerül be.|Sikeres. Két azonos címre történő regisztráció után az adatbázisban csak egyszer szerepelt ugyanaz a város és cím.|
|8.|Faragó Zsófia (B118Z5)|Kártevőirtás: menü animációja|Ha felé visszük az egeret, a menüpontok körül halvány sárga fény és sárga keret jelenik meg.|Sikeres: a sárga keret minig a kiválasztott menüpontnál megmarad.|
|9.|Faragó Zsófia (B118Z5)|Főoldal: navigáció|Az egyes kategóriákban (menüpontok alatt) előrhető aloldalakra vezető linkek a megfelelő aloldalra vezetnek.|Sikeres.|
|10.|Faragó Zsófia (B118Z5)|Főoldal: reszponzivitás|Megjelenítettem a weboldalt különböző, gyakran használt ablakméretekben.|Minden felbontás esetén a tartalom igazodik a képernyő szélességéhez.|Minden felbontás esetén a tartalom igazodik a képernyő szélességéhez.|
|11.|Pásztor Marcell (D5YZPU)|Autóbérlés: menüpontok|A weboldalon ellenőriztem az összes menüpont üzemszerű megjelenését|Minden menüpont megfelelően megjelenik.
|12.|Pásztor Marcell (D5YZPU)|Autóbérlés: routing|Az alweboldal routingjának működése|Leellenőrizem a weboldalon az összes routingot, get taget|Minden get taggel megjelenő menüpont megfelelően megjelenik, nincsenek ütközések
|13.|Pásztor Marcell (D5YZPU)|Autóbérlés: autókategóriák gombok működése|A kategóriák menüpontban leellenőriztem a menüpontok megjelenését|Minden alkategória megfelelően megjelenik
|14.|Pásztor Marcell (D5YZPU)|Autóbérlés: foglalás elérhetősége|Leteszteltem a foglalás regisztrációhoz kötött működését|Megfelelően működik, foglalás csak regisztrált felhasználóknak lehetséges
|15.|Pásztor Marcell (D5YZPU)|Autóbérlés: adatbázis kapcsolat|Weboldal adatbázishoz kapcsolódása és onnan adatok megjelenítése|Megfelelő működés, minden autó betöltődik az adatbázisból, és megjelenik az elérhetősége
|16.|Pásztor Marcell (D5YZPU)|Autóbérlés: regisztráció|Weboldal regisztráció menüje, űrlapjának tesztelése|A regisztráció megfelelően működik, adatbázissal kommunikál
|17.|Pásztor Marcell (D5YZPU)|Autóbérlés: bejelentkezés|Weboldal bejelentkezés menüje, űrlapjának tesztelése|A weboldal megengedi a megfelelő adatokkal való bejelentkezés, hiba benne nem volt található.
|18.|Pásztor Marcell (D5YZPU)|Autóbérlés: felhasználói szintek kezelése|A bejelentkezés utáni jogosultság szintek ellenőrzése|Minden megfelelően működik, sikeresen lekérdezi a jogosultsági szintet, majd az alapján jár el a felhasználó engedélyeihez.
|19.|Perge Zsolt (VLV78D)|Snake: Rendes routing működés.|A routing.php megírása után elindítottam az oldalt és leelenőríztem hogy behozza-e.|Sikeresen behozta.|
|20.|Perge Zsolt (VLV78D)|Snake: Adatbázissal való kapcsolat ellenőrzése.|Az oldal tetejére kiiratni hogy "Siker" ha az adatbázissal való kapcsolat létrejött.| Kiírta az oldal tetejére hogy "Siker".|
|21.|Perge Zsolt (VLV87D)|Snake: A "Score" rendszer működésének leelenőrzése.|Miután a játék elindult az egyik almának irányítottam a kígyót.|Sikeresen hozzáadta a pontot a kijelölt helyekre.|
|22.|Perge Zsolt (VLV87D)|Snake: Start gomb|A start gomb lenyomására automatikusan elindul-e a játék?|Elindult.|
|23.|Perge Zsolt (VLV87D)|Snake: A Restart gomb működésének ellenőrzése|A gomb lenyomásával leteszteltem hogy a pontszámláló 0-ra a játék pedig alaphelyzetbe kerüljön.|A gomb funkciója sikeresen működik.|
|24.|Perge Zsolt (VLV87D)|Snake: Ne lehessen pontot manuálisan állítani.|A READONLY beállítása után futtattam az oldalt.|Siker nem lehet manuálisan beállítani a pontokat.|
|25.|Perge Zsolt (VLV87D)|Snake: A pontok teljesen random elhelyezésének tesztelése.|Elindítottam a játékot és felvettem egy-egy pontot.|Teljesen véletlenszerűen helyezkednek el.|
|26.|Perge Zsolt (VLV87D)|Snake: |||
|27.|Perge Zsolt (VLV87D)|Snake: |||
|28.|Perge Zsolt (VLV87D)|Snake: A játék probléma nélküliségének tesztelése.|Játszottam pár kört közben próbáltam a játék minden lehetséges módját tesztelni.|Hiba nélkül futott a program.|
|29.|Dohanyos Patrik (OVR1Q7)|Sport: Routing| Az oldalra feltoltott osszes informacio megjelenik-e.| Sikeres |
|30.|Dohanyos Patrik (OVR1Q7)|Sport: Oldal reszponzivitasa| Az oldal osszes munpontja, tartalma megjelenitese barmilyen felbontasu feluleten|Az oldal tartalma alkalmazodik a kepernyo meretehez|
|31.|Dohanyos Patrik (OVR1Q7)|Sport: Navigacio | Az navbarban megjeleno almenuk kozott sikeres navigalas | Sikeres
|32.|Dohanyos Patrik (OVR1Q7)|Sport: BMI calculator| BMI kiszamolasahoz hasznalt javascript mukodese| Sikeres |
|33.|Dohanyos Patrik (OVR1Q7)|Sport: Hibak az oldalon | A bongeszo console-jat hasznalva az oldalon levo hibak kilogolasa | Csak nem hasznalt (alap)boostrap elemek voltak hibasak. Siker?
|34.|Dohanyos Patrik (OVR1Q7)|Sport: Network| Az oldalon levo dolgok megjelenesi ideje stb | Jo eredmenyek, sikeres |
|35.|Dohanyos Patrik (OVR1Q7)|Sport: Oldalrol kimutato linkek | Az oldalrol kimtato linkek mukodnek-e es jo helyre iranyitanak at?| Igen, sikeres.
|36.|Dohanyos Patrik (OVR1Q7)|Sport: Contact Us| A Contact Us form kitoltese, informaciok megjelenese az adatbazisban.| Sikertelen 