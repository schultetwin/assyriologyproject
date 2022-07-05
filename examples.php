<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	</head>
	<body>


<p>
<i>
This is not the final version.  It is a collection of topics.  The final version will be much smoother.
</i>
</p>
<p>  
First, about distance: Assuming at least one version of the sign you are looking for is in the database which is usually true, one of two things usually happens.  With a small MAXDT you get a few candidates one of which is obviously the correct one.  Perhaps not exactly the same counts but close. It's easy for slight differences to occur.  However, a small MAXDT might not yield an obviously correct candidate or even any candidate.  But if you bump MAXDT up to about 10 or so you will see the correct candidate among the obviously incorrect ones that pop up.  This happens because differences between your input and the correct candidate are often multiples of the same thing.  For example, suppose that your input has 3 RH's right 2 touching a DV.  The correct candidate in the system could easily have 4 RH's 2 crossing the DV.  This alone yields a distance of 8.  This happens often.  We can either live with it or add a new entry in the database, and eventually many of these cases will be illiminated by new entries.  It is not necessary to do all because a new entry will take care of anything near it.
</p>
<p>
Given the way the system database is created, right angles, horizontal and vertical are important when counting most things.  The 2 Cross Connector is one exception; two things can cross at any angle.  The Middle Corners are also an exception; for example, neither of the two arms of a Right Middle Corner can be horizontal or vertical, but the angle between the arms can be anything as long as the corner is "pointing" to the right.  Obviously, diagonal things are not horizontal or vertical.  3 Touches and 4 Touches can be anything.  I think that's all the exceptions.  So, for example, pay attention to 2 Touches that are Other 2 Touches, O2T.  If the ends of a RH and a RUD come together at a point, that is an O2T not a RMC.  And if the end of a diagonal touches the side of another diagonal at a right angle, that is still an O2T!  They are not horizontal and vertical.

</p>
<p>  
The fact that heels &#x1230b and right down diagonals &#x12039 are usually indistinguishable
on a tablet is a continuing source of confusion.  In some cases both versions are in the database but not all because there are too many.  The user just has to try counts with heels and other counts with right down diagonals.  In a later version of this system a new kind of mark will be added: a heel-or-rightdowndiagonal mark.  That will remove the problem.  The user will have three choices: heel when it is clearly a heel, right down diagonal when it is clearly a right down diagonal, and heel-or-rightdowndiagonal when it is not clear.  The database will be edited appropriately.  But that's a big job.
</p>

<p> 
 <object data="svgimages/smallcdli215.svg" width="20" height="15" /></object> The upper lefthand corner of this sign is a nice northwest corner connector.  This is presumably the correct version , but scribes are not always so fastidious. What are the other ways that the scribe might have drawn it assuming that the DV and the RH remain?  There are four ways to touch: NWC, T2T, L2T, 2C. At most one of these can occur, "at most" because they might not touch at all.  Thus, there is a total of five ways that this corner might be drawn:(0,0,0,0), (1,0,0,0), (0,1,0,0), (0, 0, 1, 0), (0, 0, 0, 1).  Similar reasoning applies to the other three corners, and the four corners are drawn independently.  Thus, there are 5x5x5x5=625 ways that this sign might be drawn.  The system database could easily include a row for each of these versions and for many other multi-version signs as well, but as discussed next this level of detail in not needed.
</p>
<p>
The distance, the one used in this system, between any two of these versions is less than or equal to 8.  At each of the four corners the differences can be 0, 1 or 2.  So 2+2+2+2=8.  That is, if the system input is one of these versions and MAXDT=8, those few versions in the database out of the possible 625 will all be output as candidates.  Of course, the scribe might have butchered  this sign far more than considered here in which case the candidates might not contain anything useful.  This system is forgiving, but it does expect plausible versions.
</p>
<p>    
But the above corners are not limited to this sign.  One or more of them occur in almost all signs except the very simple ones. They together with the similarity of heels and right down diagonals are the source of most of a sign's versions.
</p>

<p>
This sign <object data="svgImages/smallcdli253w.svg" width="20" height="15" /></object>  is one of few examples where it is not obvious how to count things.  Yes, there are 3 DVs and no DVHTs, but what should we call the connector?  We have to agree on something.  In the system database I call it a Vertical 2 Touch, V2T.  So the counts for this sign are DV=3, V2T=1.  And, the counts for the sign <object data="svgimages/smallcdli257.svg" width="20" height="15" /></object> are DV=5, V2T=2.
The Horizontal 2 Touch connector, H2T, is analogous.</p>
<p>
And one more case is the following    <object data="svgImages/smallexample3T.svg" width="45" height="35" /></object>.  How should this be counted?   Two possibilities could be: DV=1, RH=2, 3T=1 or DV=1, RH=2, R2T=1, L2T=1.  In other words, is this a 3 touch or not?  Initially, I decided it was not a 3 touch because the two RHs were not really touching.  However, I finally decided to say it was a 3 touch because that is better information about the sign.  I think this is the way it is now in all signs.  And there is yet another possibility: it might be a 2 cross of a DV and a RHHT, but this is a reasonable choice about what you see on the tablet.</p>
<p>  
Eventually a few ligatures of signs will be added to the system database.  At the moment there is just one in Neo Babylonian: the ligature of Dingir and EN with counts DV=3, RH=1, RHHT=1, HE=2, 2C=1, R2T=2.
</p>



</body>
</html>
