![MINI3 - A naked barebone PHP application](_install/mini3.png)

# Spurt og svarað

átti frekar erfitt með að byrja verkefnið en var að fatta conceptið en útfærslan vantaði smá.
ég byrjaði með að gera BookController og gerði function fyrir halloheimur en það kom aldrei fram á vefnum það fór alltaf default á HomeController og það sem funtion var ekki í því þá kom alltaf erro þrátt fyrir að ég breytti í core application yfir í $page = BookController; en ekkert gerðist svo ég setti function í HomeController svo ég gat boðið upp á eitthvað.

í model bjó ég til book.php sem hélt fyrst private breytur og ég sótti þér og setti þær í public en breytti því yfir í private 

í view er til halloheimur.php sem fær gögn frá HomeController og sendir út texta

í HomeController er function til að sækja gögn frá model og sendir til view

ég sleppti við að gera 2 undirsíður því það gafst ekki meiri tími (of latur...) en það hefði verið með sama hætti líklegast


varðandi spurningarnar þá er létt að lesa um þetta og skilja en út útskýra er allt annað (fyrir lágmarksorð...) en ég reyndi að gera mitt besta í því en var ekki viss um autoloader í kafla 6 um hvar það var en fann eitthvað í kringum það en það er ekkert dæmi..
