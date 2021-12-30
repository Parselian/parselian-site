const timer = (deadline, hour, minute, second) => {
  const timerHours = document.querySelector(hour),
        timerMinutes = document.querySelector(minute),
        timerSeconds = document.querySelector(second);
  
  // while(new Date(deadline).getTime() <= new Date().getTime()) {
  //   deadline = new Date().getTime() + 86400000;
  // }

  const calcTime = () => {
    let currDate = new Date().getTime(),
        endTime = new Date(deadline).getTime(),
        timeRemaining = (endTime - currDate) / 1000,
        hours = Math.floor((timeRemaining / 60) / 60),
        minutes = Math.floor((timeRemaining / 60) % 60), 
        seconds = Math.floor(timeRemaining % 60);
    
    return {seconds, minutes, hours, timeRemaining};
  }

  const updateClock = () => {
    let timer = calcTime();
    
    timerHours.textContent = timer.hours;
    if( timer.hours < 10 ) {
      timerHours.textContent = '0' + timer.hours;
    }

    timerMinutes.textContent = timer.minutes;
    if( timer.minutes < 10 ) {
      timerMinutes.textContent = '0' + timer.minutes;
    } 

    timerSeconds.textContent = timer.seconds;
    if( timer.seconds < 10 ) {
      timerSeconds.textContent = '0' + timer.seconds;
    } 
    
    if( timer.timeRemaining <= 0 ) {
      deadline = new Date().getTime() + 86400000;
      intervalId = setInterval(updateClock(), 1000 );
      
      timerHours.textContent = '00';
      timerMinutes.textContent = '00';
      timerSeconds.textContent = '00';
    }
    


  }
  
  let intervalId = setInterval(updateClock, 1000);

  intervalId;
};

export default timer;