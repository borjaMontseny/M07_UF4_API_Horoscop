# M07 UF4 Horòscop API

Aquesta és una API que proporciona frases aleatòries de l'horòscop per a diferents signes zodiacals en diferents idiomes.

## Funcionalitats

-   **Llistat d'Horòscops:** Permet veure una llista de frases d'horòscops per a diferents signes zodiacals.
-   **Detalls d'Horòscop:** Proporciona informació detallada sobre una frase d'horòscop específica.
-   **Creació d'Horòscop:** Permet afegir nous horòscops a la base de dades.
-   **Actualització d'Horòscop:** Permet actualitzar la informació d'un horòscop existent.
-   **Eliminació d'Horòscop:** Permet eliminar un horòscop de la base de dades.

## Tecnologies Utilitzades

-   **Laravel:** Framework PHP per al desenvolupament de l'aplicació backend.
-   **MySQL:** Sistema de gestió de bases de dades relacional per emmagatzemar les dades.
-   **Carbon:** Biblioteca per a manipulació de dates i temps en PHP.
-   **Composer:** Gestor de paquets de PHP per a la gestió de les dependencies del projecte.

## Configuració i Ús

1. **Clonar el Repositori:** Clona el repositori a la teva màquina local utilitzant el següent comandament:

    ```bash
    git clone https://github.com/tuusuari/horoscop-api.git
    ```

2. **Instal·lar Dependencies:** Executa el següent comandament per instal·lar les dependencies del projecte:

    ```bash
    composer install
    ```

3. **Configuració de la Base de Dades:** Crea una còpia del fitxer `.env.example` com a `.env` i configura les credencials de la base de dades.

4. **Executar Migracions:** Executa les migracions per crear les taules necessàries a la base de dades:

    ```bash
    php artisan migrate
    ```

5. **Servir l'Aplicació:** Inicia el servidor de desenvolupament per a servir l'aplicació:

    ```bash
    php artisan serve
    ```

6. **Importar Horòscops:** Pots importar frases d'horòscops des d'una font externa executant la següent comanda:
    ```bash
    php artisan import:horoscop
    ```

## Contribucions

Les contribucions són benvingudes! Si vols millorar aquesta API, si us plau, envia una pull request.

## Contacte

[borjaMontseny](mailto:borja.montseny1@insbaixcamp.cat).
