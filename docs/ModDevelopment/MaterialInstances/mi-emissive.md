# Emissive/Legacy Material Instances

## Prerequisites

<div class="hbox" markdown>

[FModel](../../fmodel.md)

[Unreal Engine](../../prerequisites.md)

Plugin Template Project

</div>

## Introduction

This guide will show you how to create a material instance with an emissive effect in DaylightGame. For this guide we will simply be adding emissive glow to an existing cosmetic. 


---

# WIP

## Enabling the Alpha Texture (OPTIONAL)

Enable Opacity Mask Texture or MaskFromOtherPart depending on whether you're using a Killer or Survivor model and assign your `_M` texture to it.

## Enabling the Emission Texture (OPTIONAL)

Enable Blood Dirt Emissive and assign your `_BDE` texture to it. then enable EM Intensity and change it to your desired amount the higher it is the brighter the emission will be. Enable EM Color and set it to your desired color. See video below for an explanation on what each of the emission values do.

The other Emission settings are usable. Experimenting with them or just copying from materials in the game is recommended.

If you want to make your emission to look like Legacy, simply change your settings to match the following:

- EM Intensity = 10
- EM Noise Intensity = 2
- EM Noise Scale = 5
- EM Noise ScaleFar = 10
- EM Noise Speed X = 0.5
- EmissiveMask Custom = 5
- Emissive_Tile = 3
- EM Color R = 1 - G = 0.552359 - B = 0.212663 - Hex sRGB FFC47FFF
- Emissive Touch = R = 1 - G = 0.567833 - B = 0.25 - Hex sRGB FFC789FF

If you want your emissive area to be solid color instead of having an embers look simply change the Emissive_Tileable_Texture to a blank white box and set EM Noise Intensity to 0. (This texture is included)

- You should enable EmissiveTouch if using emission.
- The Hair material works on both killer and survivor.
- The Hide Head_Mask is just an inverted `_M` texture that only affects killers in first person. so for it Black is unhidden and White is hidden.

### Texture Based EM Colors

These materials work just like `MI_Camper_Cust` and `MI_Slasher_Cust` but the `Emissive_Tileable_Texture` controls the color of the emission instead of `EM Color` and `Emissive Touch`
To use these simply change your parent material to `MI_Camper_Cust_AdamEmission` for survivors or `MI_Slasher_Cust_AdamEmission`
 for killers. 
Set up your emission as usual, However leave `EM Color` and `Emissive Touch` at Their default values, then change `Emissive_Tileable_Texture` to your desired texture.
And you're good to go.