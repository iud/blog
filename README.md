Treść zadania:
Stwórz uproszczoną implementację bloga zawierającego posty oraz komentarze.
Kod powinien zostać utworzony w najnowszej wersji frameworku Laravel, PHP8 i przestrzegać zasad stylu kodowania PSR-12. Działające rozwiązanie umieść na repozytorium GIT, tak aby można było je ściągnąć.
Wytyczne:
- każdy post zawiera tytuł, datę utworzenia oraz aktualizacji
- każdy post może posiadać nieskończenie wiele komentarzy
- każdy komentarz zawiera nazwę użytkownika (jako zwykły string), treść oraz datę utworzenia
- powinna istnieć podstrona zawierającą tabelę z wylistowanymi wszystkimi postami (1 wiersz = 1 post); Kolumny tabeli: liczba porządkowa, tytuł postu (jako link, po kliknięciu przenosi nas do podstrony postu)
- powinna istnieć podstrona postu. Na tej podstronie powinien znajdować się tytuł danego postu oraz tabela zaw. jego komentarze (wyświetlamy maksymalnie 10 komentarzy, reszty nie pokazujemy, sortowane od najnowszego do najstarszego); Kolumny tabeli: liczba porządkowa, nazwa użytkownika, treść, data utworzenia
- powinna istnieć komenda konsolowa (artisan), która będzie usuwała komentarze starsze niż x dni (x podawane jest przez użytkownika) i wyświetlała w konsoli informację o ilości usuniętych komentarzy
- powinien istnieć seeder, który wypełni bazę postami (50 postów) oraz komentarzami (od 6 do 20 komentarzy per post)
