# Funkcionális specifikáció

## 05. Követelménylista
|Modul|ID|Név|Verzió|Kifejtés|
|-----|--|---|------|--------|
|Felület|F#0101|Főoldal|1.0|A főoldal felülete jelenik meg először, itt általános információk és navigáció található a különbőző információs és szolgáltatást nyújtó aloldalakra.|
|Felület|F#0201|Szabadidős aloldal információs oldala|1.0|Általános információk, képek, friss tartalmak és ajánló található itt.|
|Felület|F#0301|Sportlap információs lapja|1.0|Üdvözlő szöveg, általános információk, képek, friss tartalmak és ajánló található itt.|
|Felület|F#0302|Sportlap bejelentkező és regisztrációs felülete|1.0|A felhasználók itt tudnak bejelentkezni a rendszerbe a funkciók eléréséhez, az új feéhasználók itt tudnak fiókot létrehozni.|
|Felület|F#0303|Sportlap: edzések menedzselése|1.0|A bejelentkezett felhasználó feliratkozhat egy edzsésre, kiválaszthatja az időpontokat, edzőt és a sportágat vagy leiratkozhat róluk, megnézheti a heti időbeosztását.|
|Felület|F#0401|Kártevőirtás információs lapja|1.0|Reklámplakát, akciók, újdonságok, bemutatkozás.|
|Felület|F#0402|Kártevőirtás: Bejelentkezés és regisztráció|1.0|Itt tudnak a felhasználók bejelentkezni és új fiókot létrehozni a kártevőirtással kapcsolatos szolgáltatások eléréséhez.|
|Felület|F#0403|Kártevőirtás: Szolgáltatás megrendelése|1.0|A bejelentkezett felhasználók megrendelhetik a kártevőirtás szolgáltatást a kiválasztott kártevő(k)re, és bejelölhetik, milyen időpontban a legalkalmasabb nekik.|
|Felület|F#0404|Kártevőirtás: Tájékoztató oldal|1.0|Tájékoztat a kártevők fajtáiról, irtásukról, a díjszabásról.|
|Jogosultság|J#0301|Sportlap: Jogosultsági szintek|1.0|- Általános felhasználó: feliratkozhat edzésre, lejelentkezhet róla beállíthatja, milyen napokon ér rá, kiválaszthat edzőt, sportágat - Edző: a sportágakhoz létrehozhat időpontokat és hozzárendelheti magát, törölheti, módosíthatja ezeket|
|Jogosultság|J#0401|Kártevőirtás: Jogosultsági szintek|1.0|- Általános felhasználó: megrendelhet házhoz jövő kártevőirtó szolgáltatást a megfelelő paramétereket beállítva. - Admin: feldolgozza a megrendeléseket, szerkeszti az oldalt, kezeli a felhasználókat.|