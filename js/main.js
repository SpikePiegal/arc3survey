// Survey.Survey.cssType = "bootstrap";
let surveyJSON = {pages:[{name:"Demographics",elements:[{type:"html",name:"comment",html:"Please answer the following questions about yourself. "},{type:"comment",name:"q1",title:"What is your age?",isRequired:true},{type:"checkbox",name:"q2",title:"Describe your race/ethnicity. Please check all that apply.",isRequired:true,hasOther:true,choices:["Black/African","American White/Caucasian","Asian or Asian American","Hawaiian or Pacific Islander","Native American or Alaskan Native","Hispanic or Latino/a"],choicesOrder:"asc",otherText:"A race not listed here (describe)",colCount:2},{type:"radiogroup",name:"q3",title:"Are you an international student?",isRequired:true,choices:["Yes","No"],colCount:2},{type:"radiogroup",name:"q4",title:"What is your sexual orientation?",isRequired:true,hasOther:true,choices:["Gay","Lesbian","Bisexual","Heterosexual/Straight"],choicesOrder:"asc",otherText:"A sexual orientation not listed here (describe)",colCount:2},{type:"radiogroup",name:"q5",title:"What year of school are you in?",isRequired:true,choices:["First year undergraduate","Second year undergraduate","Third year undergraduate","Fourth year undergraduate","Fifth or more year undergraduate","Graduate","Professional (e.g. law, medicine, veterinary, dentistry)"],colCount:2},{type:"checkbox",name:"q6",title:"Since you've been a student at ${e://Field/INSTITUTION}, have you been a member or participated in any of the following? Please check all that apply. ",isRequired:true,hasOther:true,choices:["Honor society or professional group related to your major, field of study","Student government","Fraternity or sorority (pledge or member)","Media organization (e.g., newspaper, radio, magazine)","Intercollegiate athletic team","ROTC/Cadet","Intramural or club athletic team","Political or social action group"],otherText:"Other student organization or group",colCount:2},{type:"radiogroup",name:"q7",title:"Which of the following best describes your living situation?",isRequired:true,choices:["On-campus residence hall/dormitory","Off-campus housing non-university sponsored","Other on campus housing (apartment, house)","At home with parent(s) or guardian(s)","Fraternity or sorority house","Other off campus","Off-campus university-sponsored apartment/house"],colCount:2}]},{name:"Sexual Harrasment",elements:[{type:"matrix",name:"q8",startWithNewLine:false,title:"Since you enrolled at ${e://Field/INSTITUTION}, have you been in a situation in which a faculty member, instructor or staff member:",isAllRowRequired: true,columns:["Never","Once or twice","Sometimes","Often","Many times"],rows:["Treated you “differently” because of your sex?","Displayed, used, or distributed sexist or suggestive materials?","Made offensive sexist remarks?","Put you down or was condescending to you because of your sex?","Repeatedly told sexual stories or jokes that were offensive to you?","Made unwelcome attempts to draw you into a discussion of sexual matters?","Made offensive remarks about your appearance, body, or sexual activities?","Made gestures or used body language of a sexual nature which embarrassed or offended you?","Made unwanted attempts to establish a romantic sexual relationship with you despite your efforts to discourage it?","Touched you in a way that made you feel uncomfortable?","Made unwanted attempts to stroke, fondle, or kiss you?","Made you feel like you were being bribed with a reward to engage in sexual behavior?","Made you feel threatened with some sort of retaliation for not being sexually cooperative?","Treated you badly for refusing to have sex?","Implied better treatment if you were sexually cooperative?"]}],title:"Sexual Harrasment"},{name:"Sexual Harassment Follow Up",elements:[{type:"html",name:"question1",html:"Think about the situations that happened to you that involved the behaviors you marked on the last screen. Now think about the ONE SITUATION that had the greatest effect on you and answer the following questions. "},{type:"checkbox",name:"q9",title:"The situation involved (check all that apply):",isRequired:true,choices:["Sexist or sexually offensive language, gestures or pictures","Unwanted sexual attention","Unwanted touching","Subtle or explicit bribes or threats"]},{type:"radiogroup",name:"q10",title:"Please describe the gender of the person(s) who committed the behavior.",isRequired:true,hasOther:true,choices:["Man","Woman"],otherText:"Other "},{type:"radiogroup",name:"q11",title:"Please describe the status of the person(s) who committed the behavior.",isRequired:true,hasOther:true,choices:["Faculty member","Staff member","Graduate student instructor"],otherText:"Other "},{type:"radiogroup",name:"q12",title:"Did this happen on campus?",isRequired:true,choices:["Yes","No"],otherText:"Other "},{type:"checkbox",name:"q13",title:"Please tell us how you reacted to the situation (check all that apply). ",isRequired:true,choices:["I ignored the person and did nothing.","I avoided the person as much as possible.","I treated it like a joke.","I told the person to stop.","I reported the person.","I asked someone for advice and/or support."],otherText:"Other "}],visibleIf:"{q8.Displayed, used, or distributed sexist or suggestive materials?} <> \"Never\" or {q8.Implied better treatment if you were sexually cooperative?} <> \"Never\" or {q8.Made gestures or used body language of a sexual nature which embarrassed or offended you?} <> \"Never\" or {q8.Made offensive remarks about your appearance, body, or sexual activities?} <> \"Never\" or {q8.Made offensive sexist remarks?} <> \"Never\" or {q8.Made unwanted attempts to establish a romantic sexual relationship with you despite your efforts to discourage it?} <> \"Never\" or {q8.Made unwanted attempts to stroke, fondle, or kiss you?} <> \"Never\" or {q8.Made unwelcome attempts to draw you into a discussion of sexual matters?} <> \"Never\" or {q8.Made you feel like you were being bribed with a reward to engage in sexual behavior?} <> \"Never\" or {q8.Made you feel threatened with some sort of retaliation for not being sexually cooperative?} <> \"Never\" or {q8.Put you down or was condescending to you because of your sex?} <> \"Never\" or {q8.Repeatedly told sexual stories or jokes that were offensive to you?} <> \"Never\" or {q8.Touched you in a way that made you feel uncomfortable?} <> \"Never\" or {q8.Treated you “differently” because of your sex?} <> \"Never\" or {q8.Treated you badly for refusing to have sex?} <> \"Never\""}]}

function sendDataToServer(survey) {
//survey.sendResult('b48f3bcb-3978-4486-aa30-22cf94092850');


  let dataString = JSON.stringify(survey.data);
  jQuery.support.cors = true;

  $.ajax({  
      type: 'POST',  
      url: 'connect.php', 
      data: {
        data: dataString
      },
      success: function(response) {
        console.log("success");
      }
  });

}

let survey = new Survey.Model(surveyJSON);
$("#surveyContainer").Survey({
    model: survey,
    onComplete: sendDataToServer
});


/* survey.onComplete.add(function (sender, options) {

    let dataString = JSON.stringify(survey.data);
    jQuery.support.cors = true;
 
    $.ajax({  
        type: 'POST',  
        url: 'connect.php', 
        data: {
          data: dataString
        },
        success: function(response) {
          console.log("success");
        }
    });
}); */
