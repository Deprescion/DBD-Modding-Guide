# Credits and Resources

## Extra resources

- discord.gg/dbdmods - The format discord server for more useful information and additional help with your Daylight Game modding journey.
- Unreal Engine - Engine the game is built on, allows you to cook assets the game can read.
- FModel - Open source program based on CUE4Parse to explore game files created by Unreal Engine.
- - Daylight Game Mappings - Required to explore game assets through FModel (game-specific mappings are required for encrypted UE5 games).
- Blender - Open source program for 3D modeling.
- - Psk/Psa Import/Export plugin - Allows import of psk/psa files into Blender, so you can import DaylightGame models, skeletons and modify them.
- - Better FBX Export plugin - Allows exporting of models from Blender to better game-optimized .fbx file format so you can import them into Unreal Engine editor.
- DBDUnrealPak - Daylight Game specific .uasset packager made by @olegshabunov2.
- DBD MaterialInstancePatcher - Inlcuded in archive with DBDUnrealPak above, required to make Material Instance assets work without crashing due to engine specific changes done by devs. Made by @olegshabunov2.
- UE5.7.4 UnversionedFix DLLs - Due to engine specific changes, you are required to use this UnrealEditor-CoreUObject.dll file to allow the game to read modded assets.
- UE5.7.4 Never Cook Fix - Optional DLLs - when setting up Directories to never cook in your Project Settings, you might get errors if these assets are referenced in any way. This fix prevents any errors related to this problem.
- UE5.7.4 JsonAsAsset - Optional UE Plugin to import specific assets' .json files you can export via FModel. Built for UE5.7.4 since official github Releases page doesn't have this version by @bpaxt.

## Credits

### Guide(s):
- @Deprescion
- @DeadlyBman and @bpaxt for their work on UE5.4.4 Daylight Game Modding Guide

### Tools, resources:
- @olegshabunov / @olegshabunov2 for providing majority of the resources showcased in the guides
