export function sticky() {
  const header = document.getElementsByTagName('header')[0];
  const sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
    header.classList.add('sticky');
  } else {
    header.classList.remove('sticky');
  }
}
