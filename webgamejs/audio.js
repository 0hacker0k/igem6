
function preload_audio(where){//已置入load_transition()底下
    where.load.audio("mapaudio",[prefix+"/aud/map/map.ogg",prefix+"/aud/map/map.mp3"]);
    where.load.audio("stageaudio",[prefix+"/aud/map/stage.ogg",prefix+"/aud/map/stage.mp3"])
}

function create_audio(where,name="map"){//add sound and play
    var music;
    if(name=="map"||name=="story"){
        music = where.sound.add("mapaudio");
    }else if(name=="stage"){
        music = where.sound.add("stageaudio");
    }
    var music_config=
    {
        // mute: false,
        volume: audiovolume,
        // rate: 1,
        // detune: 0,
        // seek: 0,
        loop: true,
        // delay: 0
    }
    music.play(music_config);
    return music;
}
// function create_stageaudio(where){//add sound and play
//     var music = where.sound.add("mapaudio");
//     var music_config=
//     {
//         // mute: false,
//         // volume: 1,
//         // rate: 1,
//         // detune: 0,
//         // seek: 0,
//         loop: true,
//         // delay: 0
//     }
//     music.play(music_config);
// }