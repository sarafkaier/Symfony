<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('az', array (
  'validators' => 
  array (
    'This value should be false.' => 'Bu dəyər false olmalıdır.',
    'This value should be true.' => 'Bu dəyər true olmalıdır.',
    'This value should be of type {{ type }}.' => 'Bu dəyərin tipi {{ type }} olmalıdır.',
    'This value should be blank.' => 'Bu dəyər boş olmalıdır.',
    'The value you selected is not a valid choice.' => 'Seçdiyiniz dəyər düzgün bir seçim değil.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ən az {{ limit }} seçim qeyd edilməlidir.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ən çox {{ limit }} seçim qeyd edilməlidir.',
    'One or more of the given values is invalid.' => 'Təqdim edilən dəyərlərdən bir və ya bir neçəsi yanlışdır.',
    'This field was not expected.' => 'Bu sahə gözlənilmirdi.',
    'This field is missing.' => 'Bu sahə əksikdir.',
    'This value is not a valid date.' => 'Bu dəyər düzgün bir tarix deyil.',
    'This value is not a valid datetime.' => 'Bu dəyər düzgün bir tarixsaat deyil.',
    'This value is not a valid email address.' => 'Bu dəyər düzgün bir e-poçt adresi deyil.',
    'The file could not be found.' => 'Fayl tapılmadı.',
    'The file is not readable.' => 'Fayl oxunabilən deyil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür ({{ size }} {{ suffix }}). İcazə verilən maksimum fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faylın mime tipi yanlışdr ({{ type }}). İcazə verilən mime tipləri {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Bu dəyər {{ limit }} və ya altında olmalıdır.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Bu dəyər çox uzundur. {{ limit }} və ya daha az simvol olmalıdır.',
    'This value should be {{ limit }} or more.' => 'Bu dəyər {{ limit }} veya daha fazla olmalıdır.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Bu dəyər çox qısadır. {{ limit }} və ya daha çox simvol olmalıdır.',
    'This value should not be blank.' => 'Bu dəyər boş olmamalıdır.',
    'This value should not be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value should be null.' => 'Bu dəyər boş olmamalıdır.',
    'This value is not valid.' => 'Bu dəyər doğru deyil.',
    'This value is not a valid time.' => 'Bu dəyər doğru bir saat deyil.',
    'This value is not a valid URL.' => 'Bu dəyər doğru bir URL değil.',
    'The two values should be equal.' => 'İki dəyər eyni olmalıdır.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fayl çox böyükdür. İcazə verilən ən böyük fayl ölçüsü {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fayl çox böyükdür.',
    'The file could not be uploaded.' => 'Fayl yüklənəbilmir.',
    'This value should be a valid number.' => 'Bu dəyər rəqəm olmalıdır.',
    'This file is not a valid image.' => 'Bu fayl düzgün bir şəkil deyil.',
    'This is not a valid IP address.' => 'Bu düzgün bir IP adresi deyil.',
    'This value is not a valid language.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid locale.' => 'Bu dəyər düzgün bir dil deyil.',
    'This value is not a valid country.' => 'Bu dəyər düzgün bir ölkə deyil.',
    'This value is already used.' => 'Bu dəyər hal-hazırda istifadədədir.',
    'The size of the image could not be detected.' => 'Şəklin ölçüsü hesablana bilmir.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Şəklin genişliyi çox böyükdür ({{ width }}px). İcazə verilən ən böyük genişlik {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Şəklin genişliyi çox kiçikdir ({{ width }}px). Ən az {{ min_width }}px olmalıdır.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Şəklin yüksəkliyi çox böyükdür ({{ height }}px). İcazə verilən ən böyük yüksəklik {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Şəklin yüksəkliyi çox kiçikdir ({{ height }}px). Ən az {{ min_height }}px olmalıdır.',
    'This value should be the user\'s current password.' => 'Bu dəyər istifadəçinin hazırkı parolu olmalıdır.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Bu dəyər tam olaraq {{ limit }} simvol olmaldır.',
    'The file was only partially uploaded.' => 'Fayl qismən yükləndi.',
    'No file was uploaded.' => 'Fayl yüklənmədi.',
    'No temporary folder was configured in php.ini.' => 'php.ini\'də müvəqqəti qovluq quraşdırılmayıb.',
    'Cannot write temporary file to disk.' => 'Müvəqqəti fayl diskə yazıla bilmir.',
    'A PHP extension caused the upload to fail.' => 'Bir PHP əlavəsi faylın yüklənməsinə mane oldu.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bu kolleksiyada {{ limit }} və ya daha çox element olmalıdır.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bu kolleksiyada {{ limit }} və ya daha az element olmalıdır.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bu kolleksiyada tam olaraq {{ limit }} element olmalıdır.',
    'Invalid card number.' => 'Yanlış kart nömrəsi.',
    'Unsupported card type or invalid card number.' => 'Dəstəklənməyən kart tipi və ya yanlış kart nömrəsi.',
    'This form should not contain extra fields.' => 'Bu formada əlavə sahə olmamalıdır.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Yüklənən fayl çox böyükdür. Lütfən daha kiçik fayl yükləyin.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF nişanı yanlışdır. Lütfen formanı yenidən göndərin.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Doğrulama istisnası baş verdi.',
    'Authentication credentials could not be found.' => 'Doğrulama məlumatları tapılmadı.',
    'Authentication request could not be processed due to a system problem.' => 'Sistem xətası səbəbilə doğrulama istəyi emal edilə bilmədi.',
    'Invalid credentials.' => 'Yanlış məlumat.',
    'Cookie has already been used by someone else.' => 'Kuki başqası tərəfindən istifadə edilib.',
    'Not privileged to request the resource.' => 'Resurs istəyi üçün imtiyaz yoxdur.',
    'Invalid CSRF token.' => 'Yanlış CSRF nişanı.',
    'Digest nonce has expired.' => 'Dərləmə istifadə müddəti bitib.',
    'No authentication provider found to support the authentication token.' => 'Doğrulama nişanını dəstəkləyəcək provayder tapılmadı.',
    'No session available, it either timed out or cookies are not enabled.' => 'Uyğun seans yoxdur, vaxtı keçib və ya kuki aktiv deyil.',
    'No token could be found.' => 'Nişan tapılmadı.',
    'Username could not be found.' => 'İstifadəçi adı tapılmadı.',
    'Account has expired.' => 'Hesabın istifadə müddəti bitib.',
    'Credentials have expired.' => 'Məlumatların istifadə müddəti bitib.',
    'Account is disabled.' => 'Hesab qeyri-aktiv edilib.',
    'Account is locked.' => 'Hesab kilitlənib.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'messages' => 
  array (
    'hello' => 'Bonjour %name% !',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
