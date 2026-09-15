# Custom Textures Guide


## Prerequisites

<div class="hbox" markdown>

[FModel](../../fmodel.md)

[Unreal Engine](../../prerequisites.md)

Plugin Template Project

</div>

## Introduction

This guide will show you how to replace the BC (Base Color) texture on a skin in the game - a modification sometimes called a "recolor". The steps shown here can also be applied to any other texture in the game, not limited to skins.



Please refer to the [FModel setup guide](../../fmodel.md) if you haven't already. The rest of this guide assumes you have FModel working. 


## Exporting from the game
1. Begin by loading all game files as shown in the left image. You should then be able to expand some folders to see the main game content as seen in the right image. 

	<div class="image-grid" markdown>

	![](../../img/fmodel_load_all.png)

	![](../../img/fmodel_daylight_files_expanded.png)

	</div>

	!!! note 
		Where the texture that you want to replace is located in the files depends on which texture it is. Many environment textures are in the `Textures` folder. In modern DaylightGame versions, character skin textures and other related assets  have mostly been moved into `Plugins/DBDCharacters/`. 

2. For this guide we'll edit and then replace a jacket texture for Nea, so let's find the folder for that. I've found mine at: `******Daylight/Plugins/DBDCharacters/S05/Content/ArtAssets/Textures/Outfit037/T_NKTorso037_BC`. Thankfully, there's a reasonably standardized folder structure for most characters, so finding assets for others is often similar to this example.
	
	![](../../img/fmodel_s05_textures_outfit037_highlighted.png){ .center}

	Lets click on the folder and enter grid view so we can see the textures clearly at a glance.

	![](../../img/fmodel_s05_textures_outfit037_texturesgrid.png){ .center}

	Then lets export it by right clicking the texture and selecting `Export > Texture`.

	![](../../img/fmodel_s05_textures_outfit037_exportbc.png){ .center}


# WIP