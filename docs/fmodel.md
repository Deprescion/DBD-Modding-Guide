# Exploring Game Assets

- This section is important to understanding how and where the game stores all its assets, which is required to modify them.

## FModel installation
- FModel is a free and open-source program designed to explore various Unreal Engine games' assets available on their [official website](https://fmodel.app).
- Save it somewhere you can find it later, then unzip it. Download the latest Mappings file by clicking the [Mappings button in the top right corner](https://deprescion.top/guides).
- Open FModel, open the "Settings" tab at the top. Under General, enable "Local Mapping File" and set "Mapping File Path" to the downloaded Mappings file, then press OK.
- Back in FModel, click on "Directory" tab at the top left, then click on "AES" and paste in this Main Static Key: 0x22b1639b548124925cf7b9cbaa09f9ac295fcf0324586d6b37ee1d42670b39b3
- Press OK and click on "Directory" tab one more time, this time click on "Selector", below "ADD UNDETECTED GAME" texts, click on the up/down arrow symbol.
- At the very bottom click the 3 dots on the right of "Directory" (make sure it's the bottom "Directory", below the arrows symbol from before) and locate your Game installation's Paks folder (where you normally install mods).
- As the Name, you can set it to "Dead by Daylight (LIVE)", for example, then press the blue + button, not the OK button yet. After pressing the + symbol, you'll find the top side of the panel has now been updated, the last instruction here is to select the correct UE version, click on "UE Versions" and with your keyboard begin typing "deadbydaylight", once you see GAME_DeadByDaylight (GAME_UE5_7) select it - NOTE do NOT select GAME_DeadByDaylight_OLD!
- You can then press the OK button and you should see the game's assets begin loading in. In case you struggled with any part of this, you can watch [this tutorial by ToxicShinobi](https://www.youtube.com/watch?v=8pZvSYabZN4). [Here's another slightly outdated tutorial you could use by eefernal](https://www.youtube.com/watch?v=AeB0kb4DuuQ). Do note you will need to use latest mappings from above, not ones attached to these respective tutorials' video descriptions.

<img src="/img/fmodelsetup.png" allowfullscreen>