<?php /* #?ini charset="utf-8"?

# eZ publish configuration file for icon(s)

[ExtensionSettings]
# A list of extensions which have theme data
# It's common to create a settings/icon.ini.append file
# in your extension and add the extension name to automatically
# get themes from the extension when it's turned on.
IconExtensions[]
#IconExtensions[]=bcexampleshareiconsextensionname


[IconSettings]
# Where to look for icons, relative to eZ publish
Repository=share/icons

# The standard theme. It is used as fallback theme
# if the element is not avalible
StandardTheme=crystal

# This is the main theme. It is the first place to look for icons in.
Theme=crystal

# AdditionalThemeList contains an array
# of themes. These themes will be used
# if an icon was not found in the main
# theme. StandardTheme is the fallback theme.
AdditionalThemeList[]

# Wanted size of icons, the size is not checked and is expected
# to be just a string which should be a directory in the theme
Size=normal

*/ ?>