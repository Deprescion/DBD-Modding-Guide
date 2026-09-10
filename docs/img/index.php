<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <meta charset="UTF-8">
  <title>the format - DBD Mod Creation Tutorial</title>
  <link rel="icon" type="image/x-icon" href="../../theformat.png" />
  <meta charset="utf-8" />
  <meta property="og:title" content="the format - DBD Mod Creation Tutorial">
  <meta property="og:description" content="The Format's website featuring DaylightGame modifications and guides on how to create them.">
  <meta property="og:image" content="https://deprescion.top/images/theformat.png">
  <meta property="og:url" content="https://deprescion.top">
  <meta property="og:type" content="website">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="the format - DBD Mod Creation Tutorial">
  <meta name="twitter:description" content="The Format's website featuring tons of DaylightGame modifications and more.">
  <meta name="twitter:image" content="https://deprescion.top/images/theformat.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tutorial-styles.css">
</head>
<body>
    <?php include "../../nav.php"; ?>
    
    <div class="tutorial-container">
        <header class="tutorial-header">
            <h1>Unreal Engine 5 Game Modding Guide</h1>
            <p>Complete step-by-step tutorial for creating mods in UE5</p>
        </header>

        <div class="tutorial-content">
            <!-- Step 1: Prerequisites -->
            <section class="tutorial-step">
                <div class="step-header">
                    <span class="step-number">01</span>
                    <h2>Prerequisites & Setup</h2>
                </div>
                <div class="step-content">
                    <div class="resource-item">
                        <h3>Unreal Engine 5.4.4 Installation</h3>
                        <p>Download and install UE5.4.4 (no other version will work for live DBD) from Epic Games Launcher.</p><p>UE5.4.4 requires roughly 32GB of free space. You can uncheck additional files in Options (Starter Content, etc.) to save space</p>
                        <div class="resource-media">
                            <img src="ue5install.gif" alt="UE5 Installation Process" class="tutorial-gif">
                        </div>
                    </div>

                    <div class="resource-item">
                        <h3>Apply UnversionedFix</h3>
                        <p>Download UE5.4.4 UnversionedFix DLLs from <a href="https://deprescion.top/guides/guide.php?id=3">here</a>.</p><p>Unzip it, then replace UnrealPak-CoreUObject.dll and UnrealEditor-CoreUObject.dll inside your UE5.4.4 installation folder - UE_5.4\Engine\Binaries\Win64.</p>
                        <div class="resource-media">
                            <img src="unversionedfix.gif" alt="UE5 unversioned fix application" class="tutorial-gif">
                        </div>
                    </div>
                    
                    <div class="resource-item">
                        <h3>[OPTIONAL] Visual Studio Setup</h3>
                        <p>Install Visual Studio with C++ development tools. This is only essential for compiling C++ code in your mods.</p><p>If you don't plan on creating Blueprint mods, you do not require Visual Studio, so you can skip this step entirely if you only want to make cosmetic mods. <a href="https://dev.epicgames.com/documentation/en-us/unreal-engine/setting-up-visual-studio-development-environment-for-cplusplus-projects-in-unreal-engine">Full VS Guide</a>.</p>
                        <div class="resource-media">
                            <img src="uevs.png" alt="Visual Studio Setup" class="tutorial-gif">
                        </div>
                    </div>
                    
                    <div class="resource-item">
                        <h3>Downloading DBDUnrealPak</h3>
                        <p>Download <a href="https://deprescion.top/guides/guide.php?id=7">DBDUnrealPak for UE5.4.4</a>.</p><p>Unzip it somewhere where you can find it later - you will use this a lot while making mods so put it in a memorable directory.</p>
                        <div class="resource-media">
                            <img src="UNREALPAKLOGO.png" alt="DBD Unreal Pak" class="tutorial-gif">
                        </div>
                    </div>
                </div>
            </section>


            <section class="tutorial-step">
                <div class="step-header">
                    <span class="step-number">02</span>
                    <h2>Creating Your First Mod Project</h2>
                </div>
                <div class="step-content">
                    <div class="resource-item">
                        <h3>New Project Creation</h3>
                        <p>While you can create your own UE5.4.4 project from scratch, I heavily recommend downloading the pre-prepared <a href="https://cdn.deprescion.top/resources/%5B9.3.0%5DDBD_Template.7z">UE5.4.4 DBD Template Project</a>. Without an overly long explanation, it has pre-prepared Plugins folder structure allowing you to make cosmetic mods for all characters and it contains all DBD classes so you can begin Blueprint modding in the future.</p>
                        <div class="resource-media">
                            <img src="newproject.png" alt="Creating New UE5 Project" class="tutorial-gif">
                        </div>
                    </div>
                    
                    <div class="resource-item">
                        <h3>FModel</h3>
                        <p>Download <a href="https://fmodel.app">FModel</a> and save it somewhere where you can find it later - e. g. your Desktop. Download the Newest mappings file in the <a href="https://deprescion.top/guides/">Guides</a> section - top right corner "Mappings" button.<br>Open your FModel, open "Settings" tab. In General tab, enable "Local Mapping File" and set "Mapping File Path" to your downloaded Mappings file. Now, in FModel, click on Directory in the top left and click on "AES", then paste in 0x22b1639b548124925cf7b9cbaa09f9ac295fcf0324586d6b37ee1d42670b39b3<br>Lastly, click on Directory one more time, under ADD UNDETECTED GAME press on arrows symbol, click on "..." next to Directory and locate your DBD Paks directory again, under Name type in for example "Dead by Daylight live", then press blue + button. Finally, set UE Versions to be GAME_DeadByDaylight, it should look like in the screenshot below. Make sure your GAME_DeadByDaylight is UE5_4 variant and not _OLD (GAME_UE5_2).<br>Short explanation of what FModel does: It allows you to explore DBD (or any other UE game)'s file structure - where models, materials, textures, blueprints and all other assets are located, while modding you're essentially packaging your mod to replace these assets, so knowing what asset is where is crucial. </p>
                        <div class="resource-media">
                            <img src="fmodelsetup.png" alt="FModel setup" class="tutorial-gif">
                        </div>
                    </div>
                    
                    <div class="resource-item">
                        <h3>Material Instance Patcher</h3>
                        <p>Due to internal Engine changes made by BHVR, this is crucial software for creating any mod that contains materials. Download <a href="https://deprescion.top/guides/guide.php?id=8">MaterianInstancePatcher made by olegshabunov</a> and save it in your DBDUnrealPak folder, next to the UnrealPak_NoCompression and UnrealPak_WithCompression batch files.</p>
                    </div>
                </div>
            </section>
        </div>

        <footer class="tutorial-footer">
            <p>Need help? Join our modding community or check out additional resources.</p>
            <div class="footer-links">
                <a href="../../guides" class="back-link">← Back to Guides</a>
                <a href="https://discord.gg/dbdmods" class="community-link">Join Discord</a>
            </div>
        </footer>
    </div>
</body>
</html>