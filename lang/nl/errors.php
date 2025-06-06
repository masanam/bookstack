<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Je hebt geen machtiging om de gevraagde pagina te openen.',
    'permissionJson' => 'Je hebt geen machtiging om de gevraagde actie uit te voeren.',

    // Auth
    'error_user_exists_different_creds' => 'Er bestaat al een gebruiker met het e-mailadres :email, maar met andere inloggegevens.',
    'auth_pre_register_theme_prevention' => 'Het gebruikersaccount kon niet worden geregistreerd met de opgegeven informatie',
    'email_already_confirmed' => 'Het e-mailadres is al bevestigd, probeer in te loggen.',
    'email_confirmation_invalid' => 'Deze bevestigingstoken is niet geldig of al gebruikt, probeer opnieuw te registreren.',
    'email_confirmation_expired' => 'Het bevestigingstoken is verlopen, Er is een nieuwe bevestigingsmail verzonden.',
    'email_confirmation_awaiting' => 'Het e-mailadres van dit account moet worden bevestigd',
    'ldap_fail_anonymous' => 'LDAP-toegang met \'anonymous bind\' is mislukt',
    'ldap_fail_authed' => 'LDAP-toegang is mislukt met het opgegeven dn & wachtwoord',
    'ldap_extension_not_installed' => 'LDAP PHP-extensie is niet geïnstalleerd',
    'ldap_cannot_connect' => 'Kan geen verbinding maken met de ldap server, initiële verbinding is mislukt',
    'saml_already_logged_in' => 'Reeds ingelogd',
    'saml_no_email_address' => 'In de gegevens van het externe verificatiesysteem kon voor deze gebruiker geen e-mailadres gevonden worden',
    'saml_invalid_response_id' => 'Het verzoek van het externe authenticatiesysteem wordt niet herkend door een proces dat door deze applicatie wordt gestart. Terugkeren na inloggen kan dit probleem veroorzaken.',
    'saml_fail_authed' => 'Inloggen met :system mislukt, het systeem gaf geen succesvolle autorisatie',
    'oidc_already_logged_in' => 'Reeds ingelogd',
    'oidc_no_email_address' => 'In de gegevens van het externe verificatiesysteem kon voor deze gebruiker geen e-mailadres gevonden worden',
    'oidc_fail_authed' => 'Inloggen met :system mislukt, systeem heeft geen succesvolle autorisatie gegeven',
    'social_no_action_defined' => 'Geen actie gedefinieerd',
    'social_login_bad_response' => "Fout ontvangen tijdens :socialAccount login: \n:error",
    'social_account_in_use' => 'Dit :socialAccount account is al in gebruik, Probeer in te loggen met de :socialAccount optie.',
    'social_account_email_in_use' => 'Het e-mailadres :email is al in gebruik. Als je al een account hebt, kun je met een :socialAccount account verbinden in je profielinstellingen.',
    'social_account_existing' => 'Dit :socialAccount is al gekoppeld aan je profiel.',
    'social_account_already_used_existing' => 'Dit :socialAccount account is al gebruikt door een andere gebruiker.',
    'social_account_not_used' => 'Dit :socialAccount account is niet gekoppeld aan een gebruiker. Koppel het via je profielinstellingen. ',
    'social_account_register_instructions' => 'Als je nog geen account hebt, kun je je registreren met de :socialAccount optie.',
    'social_driver_not_found' => 'Social driver niet gevonden',
    'social_driver_not_configured' => 'Je :socialAccount instellingen zijn niet correct geconfigureerd.',
    'invite_token_expired' => 'Deze uitnodigingslink is verlopen. Je kunt in plaats daarvan proberen je wachtwoord te herstellen.',
    'login_user_not_found' => 'Er is geen gebruiker gevonden voor deze actie.',

    // System
    'path_not_writable' => 'Bestandspad :filePath kon niet naar geüpload worden. Zorg dat je schrijfrechten op de server hebt.',
    'cannot_get_image_from_url' => 'Kon geen afbeelding verkrijgen van :url',
    'cannot_create_thumbs' => 'De server kon geen miniaturen maken. Controleer of je de GD PHP extensie geïnstalleerd hebt.',
    'server_upload_limit' => 'De server staat geen uploads van deze grootte toe. Probeer een kleinere bestandsgrootte.',
    'server_post_limit' => 'De server kan de opgegeven hoeveelheid gegevens niet ontvangen. Probeer het opnieuw met minder gegevens of een kleiner bestand.',
    'uploaded'  => 'De server staat geen uploads van deze grootte toe. Probeer een kleinere bestandsgrootte.',

    // Drawing & Images
    'image_upload_error' => 'Er is een fout opgetreden bij het uploaden van de afbeelding',
    'image_upload_type_error' => 'Het geüploade afbeeldingstype is ongeldig',
    'image_upload_replace_type' => 'Afbeeldingen moeten van hetzelfde type zijn',
    'image_upload_memory_limit' => 'Het uploaden van afbeeldingen en/of het maken van miniaturen is mislukt vanwege te beperkte systeemmiddelen.',
    'image_thumbnail_memory_limit' => 'Het maken van variaties in afbeeldingsgrootte is mislukt vanwege te beperkte systeemmiddelen.',
    'image_gallery_thumbnail_memory_limit' => 'Het maken van galerij miniaturen is mislukt vanwege te beperkte systeemmiddelen.',
    'drawing_data_not_found' => 'De gegevens van de tekening konden niet worden geladen. Het tekenbestand bestaat misschien niet meer of je hebt geen machtiging om het te openen.',

    // Attachments
    'attachment_not_found' => 'Bijlage niet gevonden',
    'attachment_upload_error' => 'Er is een fout opgetreden bij het uploaden van het bestand',

    // Pages
    'page_draft_autosave_fail' => 'Kon het concept niet opslaan. Zorg ervoor dat je een werkende internetverbinding hebt',
    'page_draft_delete_fail' => 'Het is niet gelukt om het concept van de pagina te verwijderen en de opgeslagen inhoud van de huidige pagina op te halen',
    'page_custom_home_deletion' => 'Een pagina die als startpagina is ingesteld, kan niet verwijderd worden',

    // Entities
    'entity_not_found' => 'Entiteit niet gevonden',
    'bookshelf_not_found' => 'Boekenplank niet gevonden',
    'book_not_found' => 'Boek niet gevonden',
    'page_not_found' => 'Pagina niet gevonden',
    'chapter_not_found' => 'Hoofdstuk niet gevonden',
    'selected_book_not_found' => 'Het geselecteerde boek is niet gevonden',
    'selected_book_chapter_not_found' => 'Het geselecteerde boek of hoofdstuk is niet gevonden',
    'guests_cannot_save_drafts' => 'Gasten kunnen geen concepten opslaan',

    // Users
    'users_cannot_delete_only_admin' => 'Je kunt niet het enige admin account verwijderen',
    'users_cannot_delete_guest' => 'Je kunt het gastaccount niet verwijderen',
    'users_could_not_send_invite' => 'Kan de gebruiker niet aanmaken, uitnodigingsmail kon niet worden verzonden',

    // Roles
    'role_cannot_be_edited' => 'Deze rol kan niet bewerkt worden',
    'role_system_cannot_be_deleted' => 'Dit is een systeemrol en kan niet verwijderd worden',
    'role_registration_default_cannot_delete' => 'Deze rol kan niet verwijerd worden zolang dit de standaardrol na registratie is.',
    'role_cannot_remove_only_admin' => 'Deze gebruiker is de enige gebruiker die is toegewezen aan de beheerdersrol. Wijs de beheerdersrol toe aan een andere gebruiker voordat u probeert deze hier te verwijderen.',

    // Comments
    'comment_list' => 'Er is een fout opgetreden tijdens het ophalen van de reacties.',
    'cannot_add_comment_to_draft' => 'Je kunt geen reacties toevoegen aan een concept.',
    'comment_add' => 'Er is een fout opgetreden tijdens het aanpassen / toevoegen van de reactie.',
    'comment_delete' => 'Er is een fout opgetreden tijdens het verwijderen van de reactie.',
    'empty_comment' => 'Kan geen lege reactie toevoegen.',

    // Error pages
    '404_page_not_found' => 'Pagina Niet Gevonden',
    'sorry_page_not_found' => 'Sorry, de pagina die je zocht kan niet gevonden worden.',
    'sorry_page_not_found_permission_warning' => 'Als je verwachtte dat deze pagina zou bestaan, heb je misschien geen machtiging om deze te bekijken.',
    'image_not_found' => 'Afbeelding niet gevonden',
    'image_not_found_subtitle' => 'Sorry, de afbeelding die je zocht is niet beschikbaar.',
    'image_not_found_details' => 'Als je verwachtte dat deze afbeelding zou bestaan, dan is deze misschien verwijderd.',
    'return_home' => 'Terug naar home',
    'error_occurred' => 'Er Ging Iets Fout',
    'app_down' => ':appName is nu niet beschikbaar',
    'back_soon' => 'Komt snel weer online.',

    // Import
    'import_zip_cant_read' => 'Kon het Zip-bestand niet lezen.',
    'import_zip_cant_decode_data' => 'Kon de data.json Zip-inhoud niet vinden of decoderen.',
    'import_zip_no_data' => 'Zip-bestand bevat niet de verwachte boek, hoofdstuk of pagina-inhoud.',
    'import_validation_failed' => 'De validatie van het Zip-bestand is mislukt met de volgende fouten:',
    'import_zip_failed_notification' => 'Importeren van het Zip-bestand is mislukt.',
    'import_perms_books' => 'Je mist de vereiste machtigingen om boeken te maken.',
    'import_perms_chapters' => 'Je mist de vereiste machtigingen om hoofdstukken te maken.',
    'import_perms_pages' => 'Je mist de vereiste machtigingen om pagina\'s te maken.',
    'import_perms_images' => 'Je mist de vereiste machtigingen om afbeeldingen toe te voegen.',
    'import_perms_attachments' => 'Je mist de vereiste machtigingen om bijlagen toe te voegen.',

    // API errors
    'api_no_authorization_found' => 'Geen autorisatie token gevonden',
    'api_bad_authorization_format' => 'Een autorisatie token is gevonden, maar het formaat schijnt onjuist te zijn',
    'api_user_token_not_found' => 'Er is geen overeenkomende API-token gevonden voor de opgegeven autorisatie token',
    'api_incorrect_token_secret' => 'Het opgegeven geheim voor de API-token is onjuist',
    'api_user_no_api_permission' => 'De eigenaar van de gebruikte API-token heeft geen machtiging om API calls te maken',
    'api_user_token_expired' => 'De gebruikte autorisatie token is verlopen',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Fout opgetreden bij het verzenden van een test email:',

    // HTTP errors
    'http_ssr_url_no_match' => 'De URL komt niet overeen met de geconfigureerde toegestane SSR-hosts',
];
