
class Translate {

    static date(language, text) {
        const translate = new Date(text);

        if(language == 'French') return ('0' + translate.getDate()).slice(-2) + '/' + ('0' + (translate.getMonth() + 1)).slice(-2) + '/' + (translate.getYear() + 1900);
        else return ('0' + (translate.getMonth() + 1)).slice(-2) + '/' + ('0' + translate.getDate()).slice(-2) + '/' + (translate.getYear() + 1900);
    };

    static blogs(language, text) {
        if(language == 'French') return {
            'loading' : 'Chargement',
            'by' : 'Par',
            'articles' : 'Articles',
            'bookmark' : 'Signet',
            'read' : 'Lire',
            'loginError' : 'Veuillez vous Connecter pour pouvoir ajouter des Signets.',
            'bookmarkError' : 'Impossible d\'ajouter un Signet pour l\'instant. Merci de réessayer ultérieurement.',
            'loadEmpty' : 'Aucun Blog ne correspond à votre Recherche. Veuillez modifier votre Recherche et/ou votre Langue puis réessayez.',
            'loadError' : 'Impossible d\'effectuer une Recherche pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'loading' : 'Loading',
            'by' : 'By',
            'articles' : 'Articles',
            'bookmark' : 'Bookmark',
            'read' : 'Read',
            'loginError' : 'Please Login to be able to add Bookmarks.',
            'bookmarkError' : 'Unable to add a Bookmark at this time. Please try again later.',
            'loadEmpty' : 'No Blog matches your Search. Please change your Search and/or Language and try again.',
            'loadError' : 'Unable to Search at this time. Please try again later.',
        }[text];
    };

    static articles(language, text) {
        if(language == 'French') return {
            'loading' : 'Chargement',
            'by' : 'Par',
            'on' : 'Le',
            'bookmark' : 'Signet',
            'read' : 'Lire',
            'loginError' : 'Veuillez vous Connecter pour pouvoir ajouter des Signets.',
            'bookmarkError' : 'Impossible d\'ajouter un Signet pour l\'instant. Merci de réessayer ultérieurement.',
            'loadEmpty' : 'Aucun Article ne correspond à votre Recherche. Veuillez modifier votre Recherche et/ou votre Langue puis réessayez.',
            'loadError' : 'Impossible d\'effectuer une Recherche pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'loading' : 'Loading',
            'by' : 'By',
            'on' : 'On',
            'bookmark' : 'Bookmark',
            'read' : 'Read',
            'loginError' : 'Please Login to be able to add Bookmarks.',
            'bookmarkError' : 'Unable to add a Bookmark at this time. Please try again later.',
            'loadEmpty' : 'No Article matches your Search. Please change your Search and/or Language and try again.',
            'loadError' : 'Unable to Search at this time. Please try again later.',
        }[text];
    };

    static login(language, text) {
        if(language == 'French') return {
            'loginError' : 'Impossible de vous Connecter pour l\'instant. Merci de réessayer ultérieurement.',
            'forgotSuccess' : 'Un nouveau Mot de Passe vient de vous être envoyé sur votre Adresse Email.',
            'forgotError' : 'Impossible de Réinitialiser votre Mot de Passe pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'loginError' : 'Unable to Login at this time. Please try again later.',
            'forgotSuccess' : 'A new Password has just been sent to your Email Address.',
            'forgotError' : 'Unable to Reset your Password at this time. Please try again later.',
        }[text];
    };

    static signup(language, text) {
        if(language == 'French') return {
            'signupSuccess' : 'Félicitations pour votre Inscription ! Votre Mot de Passe vient de vous être envoyé sur votre Adresse Email.',
            'signupError' : 'Impossible de vous Inscrire pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'signupSuccess' : 'Congratulations on your Registration ! Your Password has just been sent to your Email Address.',
            'signupError' : 'Unable to Register at this time. Please try again later.',
        }[text];
    };

    static home(language, text) {
        if(language == 'French') return {
            'loading' : 'Chargement',
            'by' : 'Par',
            'on' : 'Le',
            'read' : 'Lire',
            'error' : 'Impossible de récupérer vos Signets pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'loading' : 'Loading',
            'by' : 'By',
            'on' : 'On',
            'read' : 'Read',
            'error' : 'Unable to retrieve your Bookmarks at this time. Please try again later.',
        }[text];
    };

    static reader(language, text) {
        if(language == 'French') return {
            'blogsEmpty' : 'Vous n\'avez sauvegardé aucun Blog. <a href="/BlogsBerry/Blogs"> Recherchez de nouveaux Blogs, </a> et enregistrez ceux que vous préférez en cliquant sur l\'icône en forme de Coeur.',
            'blogsError' : 'Impossible de supprimer ce Blog pour l\'instant. Merci de réessayer ultérieurement.',
            'articlesEmpty' : 'Vous n\'avez sauvegardé aucun Article. <a href="/BlogsBerry/Articles"> Recherchez de nouveaux Articles, </a> et enregistrez ceux que vous préférez en cliquant sur l\'icône en forme de Coeur.',
            'articlesError' : 'Impossible de supprimer cet Article pour l\'instant. Merci de réessayer ultérieurement.',
            'settingsError' : 'Impossible de mettre à jour votre Compte pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'blogsEmpty' : 'You have not saved any Blogs. <a href="/BlogsBerry/Blogs"> Search for new Blogs, </a> and save the ones you prefer by clicking on the Heart icon.',
            'blogsError' : 'Unable to delete this Blog at this time. Please try again later.',
            'articlesEmpty' : 'You have not saved any Articles. <a href="/BlogsBerry/Articles"> Search for new Articles, </a> and save the ones you prefer by clicking on the Heart icon.',
            'articlesError' : 'Unable to delete this Article at this time. Please try again later.',
            'settingsError' : 'Unable to update your Account at this time. Please try again later.',
        }[text];
    };

    static blogger(language, text) {
        if(language == 'French') return {
            'settingsError' : 'Impossible de mettre à jour votre Compte pour l\'instant. Merci de réessayer ultérieurement.',
            'addError' : 'Impossible de créer ce Blog pour l\'instant. Merci de réessayer ultérieurement.',
            'loading' : 'Chargement',
            'fileSize' : 'Veuillez envoyer un fichier de moins de 4 Mo.',
            'fileExtension' : 'Veuillez envoyer un fichier avec l\'extension .jpeg, .jpg, ou .png.',
            'fileType' : 'Veuillez envoyer un fichier de type image/jpeg ou image/png.',
            'fileError' : 'Impossible d\'envoyer votre fichier pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'settingsError' : 'Unable to update your Account at this time. Please try again later.',
            'addError' : 'Unable to create this Blog at the moment. Please try again later.',
            'loading' : 'Loading',
            'fileSize' : 'Please send a file of less than 4 Mb.',
            'fileExtension' : 'Please send a file with the extension .jpeg, .jpg, or .png.',
            'fileType' : 'Please send an image/jpeg or image/png file.',
            'fileError' : 'Unable to send your file at the moment. Please try again later.',
        }[text];
    };

    static overview(language, text) {
        if(language == 'French') return {
            'loading' : 'Chargement',
            'fileSize' : 'Veuillez envoyer un fichier de moins de 4 Mo.',
            'fileExtension' : 'Veuillez envoyer un fichier avec l\'extension .jpeg, .jpg, ou .png.',
            'fileType' : 'Veuillez envoyer un fichier de type image/jpeg ou image/png.',
            'fileError' : 'Impossible d\'envoyer votre fichier pour l\'instant. Merci de réessayer ultérieurement.',
            'editClick' : 'Impossible de charger l\'Article demandé pour l\'instant. Merci de réessayer ultérieurement.',
            'editSubmit' : 'Impossible de mettre à jour cet Article pour l\'instant. Merci de réessayer ultérieurement.',
            'editConfirm' : 'Êtes-vous sûr de vouloir supprimer cet Article ? Cette suppression est définitive !',
            'editDelete' : 'Impossible de supprimer cet Article pour l\'instant. Merci de réessayer ultérieurement.',
            'settingsSubmit' : 'Impossible de mettre à jour ce Blog pour l\'instant. Merci de réessayer ultérieurement.',
            'settingsConfirm' : 'Êtes-vous sûr de vouloir supprimer ce Blog ? Cette suppression est définitive !',
            'settingsDelete' : 'Impossible de supprimer ce Blog pour l\'instant. Merci de réessayer ultérieurement.',
            'addError' : 'Impossible de créer cet Article pour l\'instant. Merci de réessayer ultérieurement.',
        }[text];
        else return {
            'loading' : 'Loading',
            'fileSize' : 'Please send a file of less than 4 Mb.',
            'fileExtension' : 'Please send a file with the extension .jpeg, .jpg, or .png.',
            'fileType' : 'Please send an image/jpeg or image/png file.',
            'fileError' : 'Unable to send your file at the moment. Please try again later.',
            'editClick' : 'Unable to load the requested Article at this time. Please try again later.',
            'editSubmit' : 'Unable to update this Article at this time. Please try again later.',
            'editConfirm' : 'Are you sure you want to delete this Article ? This deletion is final !',
            'editDelete' : 'Unable to delete this Article at this time. Please try again later.',
            'settingsSubmit' : 'Unable to update this Blog at this time. Please try again later.',
            'settingsConfirm' : 'Are you sure you want to delete this Blog ? This deletion is final !',
            'settingsDelete' : 'Unable to delete this Blog at this time. Please try again later.',
            'addError' : 'Unable to create this Article at this time. Please try again later.',
        }[text];
    };

    static statistics(language, text) {
        if(language == 'French') return {
            'statisticsError' : 'Impossible de charger les Statistiques demandées pour l\'instant. Merci de réessayer ultérieurement.',
            'articlesError' : 'Impossible de charger les Articles du Blog demandé pour l\'instant. Merci de réessayer ultérieurement.',
            'boostSuccess' : 'Un message à propos des Partenariats Blog\'s Berry vient de vous être envoyé sur votre Adresse Email',
            'boostError' : 'Impossible de vous envoyer un Email pour l\'instant. Contactez-nous à contact@anthony-khelil.com afin de devenir Partenaire Blog\'s Berry.',
        }[text];
        else return {
            'statisticsError' : 'Unable to load the requested Statistics at this time. Please try again later.',
            'articlesError' : 'Unable to load the Articles from the requested Blog at this time. Please try again later.',
            'boostSuccess' : 'A message about Blog\'s Berry Partnerships has just been sent to your Email Address.',
            'boostError' : 'Unable to send you an Email at this time. Contact us at contact@anthony-khelil.com to become a Blog\'s Berry Partner.',
        }[text];
    };
};
