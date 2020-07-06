<div id="content">
<h1>Development</h1>
<p>Project is currently not actively developed.</p>

<h2>Development tasks:</h2>

<table class="table">
<tr><th>phase/milestone</th><th>task/goal</th><th>priority</th></tr>
<tr><td>MIDI</td><td>Modularize Frinika</td><td>High</td></tr>
<tr><td>MIDI</td><td>Refactor it to use command pattern for operations and undo</td><td>High</td></tr>
<tr><td>MIDI</td><td>Replace Java serialization file format with more flexible format</td><td>High</td></tr>
<tr><td>MIDI</td><td>Introduce popup menus</td><td>Low</td></tr>
<tr><td>MIDI</td><td>Separate GUI and audio processing to provide command line player</td><td>Medium</td></tr>
<tr><td>MIDI</td><td>Introduce modes for specific file formats (mid, smf)</td><td>Low</td></tr>
<tr><td>MIDI</td><td>Add midi specific features: subtitles, instruments map, patchmap editor</td><td>Low</td></tr>
<tr><td>MIDI</td><td>Integrate features from MidiSwing app <a class="urlextern" href="https://www.macupdate.com/app/mac/15526/midiswing">https://www.macupdate.com/app/mac/15526/midiswing</a></td><td>Low</td></tr>
<tr><td>MIDI</td><td>Integrate notation editor <a class="urlextern" href="http://explodingart.com/jmusic/">http://explodingart.com/jmusic/</a></td><td>Low</td></tr>
<tr><td>MIDI</td><td><strong>Contingency plan:</strong> Release as MIDI editor</td><td></td></tr>
<tr><td>Wave</td><td>Mode for wave editing (wav, mp3, ogg, vorbis, flac)</td><td></td></tr>
<tr><td>Wave</td><td>Add support for samples and library</td><td></td></tr>
<tr><td>Wave</td><td>Replace wave track with something more flexible</td><td></td></tr>
<tr><td>Wave</td><td>Integrate and modularize Laoe <a class="urlextern" href="http://www.oli4.ch/laoe/">http://www.oli4.ch/laoe/</a></td><td></td></tr>
<tr><td>Wave</td><td>Support wave editing</td><td></td></tr>
<tr><td>Wave</td><td><strong>Contingency plan:</strong> Release as WAVE editor</td><td></td></tr>
<tr><td>Multitrack</td><td>Mode for multitrack files (mod, s3m, xm, it)</td><td></td></tr>
<tr><td>Multitrack</td><td>Add wave rendering and effects</td><td></td></tr>
<tr><td>Multitrack</td><td>Integrate and modularize blue <a class="urlextern" href="http://blue.kunstmusik.com/">http://blue.kunstmusik.com/</a></td><td></td></tr>
<tr><td>Multitrack</td><td><strong>Contingency plan:</strong> Release as multitrack editor</td><td></td></tr>
<tr><td>Synth</td><td>Mode for speech synthesis</td><td></td></tr>
<tr><td>Synth</td><td>Introduce data-flow audio synthesis support</td><td></td></tr>
<tr><td>Synth</td><td>Integrate java speech synthesis</td><td></td></tr>
<tr><td>Synth</td><td>Integrate JSynthLib</td><td></td></tr>
<tr><td>Synth</td><td>JSyn audio synthesis API for Java - SoftSynth</td><td></td></tr>
<tr><td>Others</td><td>Integrate <a class="urlextern" href="http://dguitar.sourceforge.net/">http://dguitar.sourceforge.net/</a></td><td></td></tr>
<tr><td>Others</td><td>Integrate <a class="urlextern" href="https://sourceforge.net/projects/jniz">https://sourceforge.net/projects/jniz</a></td><td></td></tr>
<tr><td>Others</td><td>Integrate <a class="urlextern" href="https://sourceforge.net/projects/jampal/">https://sourceforge.net/projects/jampal/</a></td><td></td></tr>
<tr><td>Others</td><td><a class="urlextern" href="http://evanxmerz.com/soundsynthjava/Sound_Synth_Java.html">http://evanxmerz.com/soundsynthjava/Sound_Synth_Java.html</a></td><td></td></tr>
<tr><td>Others</td><td>Include piano learning lessons</td><td></td></tr>
<tr><td>Others</td><td>support other DAW formats</td><td></td></tr>
</table>

<h2>Projects considered for integration:</h2>

<table class="table">
<tr><th>Project name</th><th>Website</th><th>License</th><th>Description</th></tr>
<tr><td>Frinika</td><td><a class="urlextern" href="http://www.frinika.com/">http://www.frinika.com/</a></td><td>GNU/GPL</td><td>DAW / Midi editor with various synthesis support</td></tr>
<tr><td>JMusic</td><td><a class="urlextern" href="http://explodingart.com/jmusic/">http://explodingart.com/jmusic/</a></td><td>GNU/GPL</td><td>Notation editor</td></tr>
<tr><td>Blue</td><td><a class="urlextern" href="http://blue.kunstmusik.com/">http://blue.kunstmusik.com/</a></td><td>GNU/GPL</td><td>DAW / Using external synth (CSound)</td></tr>
<tr><td>Laoe</td><td><a class="urlextern" href="http://www.oli4.ch/laoe/">http://www.oli4.ch/laoe/</a></td><td>GNU/GPL</td><td>Wave editor</td></tr>
<tr><td>MidiSwing</td><td><a class="urlextern" href="https://www.macupdate.com/app/mac/15526/midiswing">https://www.macupdate.com/app/mac/15526/midiswing</a></td><td>Freeware / Abandonware</td><td>Midi editor</td></tr>
<tr><td>JavaDAW</td><td><a class="urlextern" href="http://javadaw.com/">http://javadaw.com/</a></td><td>GNU/GPL / Hidden</td><td>DAW / Basic support</td></tr>
<tr><td>DGuitar</td><td><a class="urlextern" href="http://dguitar.sourceforge.net/">http://dguitar.sourceforge.net/</a></td><td>GNU/GPL</td><td>Guitar pro viewer</td></tr>
<tr><td>JSynthLib</td><td><a class="urlextern" href="https://sourceforge.net/projects/jsynthlib/">https://sourceforge.net/projects/jsynthlib/</a></td><td>GNU/GPL</td><td>MIDI / synthesis</td></tr>
<tr><td>Java SID Player</td><td><a class="urlextern" href="https://sourceforge.net/projects/jsidplay2/">https://sourceforge.net/projects/jsidplay2/</a></td><td>GNU/LGPL</td><td>SID player</td></tr>
<tr><td>Java MOD Player</td><td><a class="urlextern" href="https://sourceforge.net/projects/javamod/">https://sourceforge.net/projects/javamod/</a></td><td>GNU/GPL</td><td>MOD player</td></tr>
<tr><td>Kangas Sound Editor</td><td><a class="urlextern" href="https://sourceforge.net/projects/kangasound/">https://sourceforge.net/projects/kangasound/</a></td><td>GNU/GPL</td><td>Wave synthesis</td></tr>
<tr><td>JNIZ</td><td><a class="urlextern" href="https://sourceforge.net/projects/jniz/">https://sourceforge.net/projects/jniz/</a></td><td>Proprietary</td><td>Audio to MIDI conversion</td></tr>
<tr><td>JFugue</td><td><a class="urlextern" href="http://www.jfugue.org/">http://www.jfugue.org/</a></td><td>Apache</td><td>Notation editor / generator</td></tr>
<tr><td>Lilypond NetBeans</td><td><a class="urlextern" href="https://github.com/GeertjanWielenga/NetLilyBeansPond">https://github.com/GeertjanWielenga/NetLilyBeansPond</a></td><td>GNU/GPL</td><td>Notation editor</td></tr>
<tr><td>Impro-visor</td><td><a class="urlextern" href="https://www.cs.hmc.edu/~keller/jazz/improvisor/">https://www.cs.hmc.edu/~keller/jazz/improvisor/</a></td><td>GNU/GPL</td><td>Music generator</td></tr>
</table>

<h2>Libraries considered for integration:</h2>

<table class="table">
<tr><th>Library name</th><th>Website</th><th>License</th><th>Description</th></tr>
<tr><td>jVST Wrapper</td><td><a class="urlextern" href="http://jvstwrapper.sourceforge.net/">http://jvstwrapper.sourceforge.net/</a></td><td>GNU/LGPL</td><td>Support for VST plugins</td></tr>
<tr><td>Java Media Framework</td><td><a class="urlextern" href="https://en.wikipedia.org/wiki/Java_Media_Framework">https://en.wikipedia.org/wiki/Java_Media_Framework</a></td><td>SCSL</td><td>Codecs</td></tr>
<tr><td>Audio/video codecs</td><td><a class="urlextern" href="http://jcodec.org/">http://jcodec.org/</a></td><td>Free BSD</td><td>Codecs</td></tr>
<tr><td>SoftSynth + links</td><td><a class="urlextern" href="http://www.softsynth.com/links/java_music.php">http://www.softsynth.com/links/java_music.php</a></td><td></td><td></td></tr>
<tr><td>Java FLAC</td><td><a class="urlextern" href="https://github.com/nayuki/FLAC-library-Java">https://github.com/nayuki/FLAC-library-Java</a></td><td>GNU/LGPL</td><td>FLAC codec library</td></tr>
<tr><td>OPL3 Java</td><td><a class="urlextern" href="http://opl3.cozendey.com/">http://opl3.cozendey.com/</a></td><td>GNU/LGPL</td><td>OPL3 soundchip emulation</td></tr>
<tr><td>SoundHelix</td><td><a class="urlextern" href="https://sourceforge.net/projects/soundhelix/">https://sourceforge.net/projects/soundhelix/</a></td><td>GNU/GPL</td><td>Music generator</td></tr>
<tr><td>SoundComp</td><td><a class="urlextern" href="http://soundcomp.maramuse.de/">http://soundcomp.maramuse.de/</a></td><td>GNU/GPL</td><td>Synthesis (programming)</td></tr>
<tr><td>Sound Synth Java</td><td><a class="urlextern" href="http://evanxmerz.com/soundsynthjava/Sound_Synth_Java.html">http://evanxmerz.com/soundsynthjava/Sound_Synth_Java.html</a></td><td></td><td>Synthesis (programming)</td></tr>
</table>

</body>
</html>