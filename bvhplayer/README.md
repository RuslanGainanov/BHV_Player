#bvhplayer.js
This is a BVH Motion Capture Data file viewer written in JavaScript (using WebGL and specifically the three.js library). 
See a demonstration at: https://fling.seas.upenn.edu/~emretan/cgi-bin/bvhlist.html.

Originally written by @emretan -- forked, refactored, secured, and expanded by @iamwolf.

##Features
- Supports any rotation order in the file.
- Supports 3 and 6 channels.
- Can pause, replay or play forward or back frame by frame.
- Can scale the whole world up/down.
- Can scale just the bones up/down.
- Automatically detects if the bone sizes in the BVH file are too little, and scales them up before starting the animation.
- Can change the up vector to +/-X, +/-Y, +/-Z.
- Displays a ghost image of the body every 100 frames, to see the trace of the movement. Can toggle it on or off.
- Automatically sets the up vector of the model before starting the animation depending on the orientation of its bounding box.
- Automatically changes the camera position before starting the animation depending on the up vector.
- Can move the camera around the world.
- Activate or deactivate debug information and FPS stats via boolean flags

##Dependencies

- [RequestAnimationFrame.js](http://paulirish.com/2011/requestanimationframe-for-smart-animating/)
- [Stats.js for information on FPS etc.](http://github.com/mrdoob/stats.js)
- [Three.js](https://github.com/mrdoob/three.js/)

##To Do / Known Bugs

- Frame by frame playing -->Works going forward, need to implement going back frames +
- Bone scaling doesn't scale ghosts
- Cannot update to current three revision 67 as some used methods have been deprecated

##Enhancements down the road
- Minified library file as an extension to three.js. Configuration via init-parameters
- Bootstrap compatibility / theming options