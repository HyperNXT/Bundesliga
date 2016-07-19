# Wyświetli ranking drużyn z sortowaniem wg. ilości pkt, bilans bramkowy
SELECT r.*, d.nazwa  
FROM ranking r 
LEFT JOIN druzyny d 
ON r.id_druzyny = d.id_druzyny 
ORDER BY r.punkty DESC, 
(r.bramki_zdobyte - r.bramki_stracone) DESC; 

# Wyświetli statystyki piłkarzy wg. ilości strzelonych bramek
SELECT s.bramki, p.imie, p.nazwisko 
FROM statystyki s 
LEFT JOIN pilkarze p 
ON s.id_pilkarza = p.id_pilkarza 
ORDER BY s.bramki;

# Wyświetli statystyki piłkarzy wg. ilości asyst
SELECT s.asysty, p.imie, p.nazwisko 
FROM statystyki s 
LEFT JOIN pilkarze p 
ON s.id_pilkarza = p.id_pilkarza 
ORDER BY s.asysty;

# Wyświetli statystyki piłkarzy wg. ilości czerwonych kartek
SELECT s.czerwone_kartki, p.imie, p.nazwisko 
FROM statystyki s 
LEFT JOIN pilkarze p 
ON s.id_pilkarza = p.id_pilkarza 
ORDER BY s.czerwone_kartki;

# Wyświetli statystyki piłkarzy wg. ilości żółtych kartek
SELECT s.zolte_kartki, p.imie, p.nazwisko 
FROM statystyki s 
LEFT JOIN pilkarze p 
ON s.id_pilkarza = p.id_pilkarza 
ORDER BY s.zolte_kartki;

# Wyświetli statystyki piłkarzy wg. ilości czystych kont
SELECT s.czyste_konta, p.imie, p.nazwisko 
FROM statystyki s 
LEFT JOIN pilkarze p 
ON s.id_pilkarza = p.id_pilkarza 
ORDER BY s.czyste_konta;