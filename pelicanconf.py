# Theme specific configuration parameters

# custom Jinja2 filter for localizing theme
def gettext(string, lang):
    if lang == "en":
        return string
    elif lang == "it":
        if string == "Archives": return "Archivi"
        elif string == "Archives for": return "Archivi per"
	elif string == "Posted by": return "Pubblicato da"
	elif string == "Updated on": return "Ultimo aggiornamento"
	elif string == "Articles by": return "Articoli di"
	elif string == "Authors": return "Autori"
	elif string == "Categories": return "Sezioni"
	elif string == "Articles in the": return "Articoli in"
	elif string == "category": return ""
	elif string == "There are": return "ci sono"
	elif string == "comments": return "commenti"
	elif string == "Permalink to": return "Permalink a"
	elif string == "Older Posts": return "Articoli meno recenti"
	elif string == "Newest Posts": return "Articoli più recenti"
	elif string == "Page": return "Pagina"
	elif string == "Tag": return "Etichetta"
	elif string == "Tags": return "Etichette"
	elif string == "Tags for": return "Etichette per"
        else: return string
        
 JINJA_FILTERS = {
     "gettext": gettext,
}
