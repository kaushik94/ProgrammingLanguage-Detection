<p><a href="http://users.ipa.net/~dwighth/smalltalk/byte_aug81/design_principles_behind_smalltalk.html">"Design Principles Behind Smalltalk" by Daniel Ingalls</a></p>
<?=$Version;?>
<p>Home Page: <a href="http://smalltalk.gnu.org/"> GNU Smalltalk : The Smalltalk for those who can type </a></p>
<p>Download: <a href="http://smalltalk.gnu.org/download">Downloading GNU Smalltalk</a></p><br/>

<p><strong>--enable-jit was not available for this build</strong></p>


<p></br>We've made the Smalltalk code a little more generic by abstracting out these implementation specific details, these are read from the command line before each script:</p>
<pre>
Object subclass<span class="sym">: #</span>Tests

<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>

<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>

<span class="sym">!</span>Tests class methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
   <span class="sym">^</span><span class="kwa">self</span> stdout bufferSize<span class="sym">:</span> <span class="num">4096</span><span class="sym">! !</span>

<span class="sym">!</span>Stream methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
   <span class="sym">|</span> n s <span class="sym">|</span>
   n <span class="sym">:=</span> <span class="num">0.5</span>d0 <span class="sym">* (</span><span class="num">10</span> raisedToInteger<span class="sym">:</span> decimalPlaces negated<span class="sym">).</span>
   s <span class="sym">:= ((</span>number sign <span class="sym">&lt;</span> <span class="num">0</span><span class="sym">)</span> ifTrue<span class="sym">: [</span>number <span class="sym">-</span> n<span class="sym">]</span> ifFalse<span class="sym">: [</span>number <span class="sym">+</span> n<span class="sym">])</span> printString<span class="sym">.</span>

<span class="sym">!</span>Stream methodsFor<span class="sym">:</span> <span class="str">'platform'</span><span class="sym">!</span>
   <span class="sym">|</span> s <span class="sym">|</span>
   s <span class="sym">:=</span> number printString<span class="sym">.</span>
</pre>