const calculator = (price = 100) => {
  const calcBlock = document.querySelector('.calc-block'),
      calcType = calcBlock.querySelector('.calc-type'),
      calcSquare = calcBlock.querySelector('.calc-square'),
      calcCount = calcBlock.querySelector('.calc-count'),
      calcDay = calcBlock.querySelector('.calc-day'),
      totalField = document.getElementById('total');
  let count = +totalField.textContent,
      timerIdAsc,
      timerIdDec,
      totalValue;

  const calc = () => {
    let calcTypeValue = calcType.value,
        calcSquareValue = calcSquare.value,
        calcCountValue = 1,
        calcDayValue = 1;

    totalValue = 0;
        
    if( calcCount.value > 1 ) {
      calcCountValue += ( calcCount.value - 1 ) / 10;
    }

    if( calcDay.value && calcDay.value < 5 ) {
      calcDayValue *= 2;
    } else if( calcDay.value && calcDay.value < 10 ) {
      calcDayValue *= 1.5;
    }

    if( calcTypeValue && calcSquareValue ) {
      totalValue = price * calcTypeValue * calcSquareValue * calcCountValue *  calcDayValue;
      timerIdAsc = setInterval(() => {
        if( count < totalValue && count !== totalValue ) {
          totalField.textContent = count;
          count += 50;
        } else {
          totalField.textContent = count;
          clearInterval(timerIdAsc);
        }
      }, 10);

      timerIdDec = setInterval(() => {
        if( count >= totalValue && count !== totalValue ) {
          totalField.textContent = count;
          count -= 50;
        } else {
          totalField.textContent = count;
          clearInterval(timerIdDec);
        }
      }, 10); 
    } else {
      totalValue = 0;
    }

    

    
  };

  calcBlock.addEventListener('input', (e) => {
    const target = e.target;

    clearInterval(timerIdAsc);
    clearInterval(timerIdDec);
    if( target === calcSquare || target === calcType || 
      target === calcCount || target === calcDay ) {
      calc();
    }
  });

  if ( count <= totalValue ) {
    clearInterval(timerIdDec);
    timerIdAsc;
  } else if ( count >= totalValue && count !== totalValue ) {
    clearInterval(timerIdAsc);
    timerIdDec;
  }
};

export default calculator;