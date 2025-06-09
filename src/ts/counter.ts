type CounterAction = 'increment' | 'decrement' | 'reset';

class PersistentCounter {
  private count: number;
  private readonly storageKey = 'ts-counter-value';
  private counterElement: HTMLElement;

  constructor(elementId: string) {
    this.counterElement = document.getElementById(elementId)!;
    this.count = this.loadCount();
    this.updateDisplay();
  }

  private loadCount(): number {
    const saved = localStorage.getItem(this.storageKey);
    return saved ? parseInt(saved) : 0;
  }

  private saveCount(): void {
    localStorage.setItem(this.storageKey, this.count.toString());
  }

  public update(action: CounterAction): void {
    switch (action) {
      case 'increment': this.count++; break;
      case 'decrement': this.count--; break;
      case 'reset': this.count = 0; break;
    }
    this.saveCount();
    this.updateDisplay();
  }

  private updateDisplay(): void {
    this.counterElement.textContent = this.count.toString();

    // Visual feedback
    this.counterElement.classList.remove('text-blue-600', 'text-green-600', 'text-red-600', 'animate-pulse');
    void this.counterElement.offsetWidth; // Trigger reflow

    if (this.count > 0) {
      this.counterElement.classList.add('text-green-600', 'animate-pulse');
    } else if (this.count < 0) {
      this.counterElement.classList.add('text-red-600', 'animate-pulse');
    } else {
      this.counterElement.classList.add('text-blue-600');
    }
  }
}

// Initialize
const counter = new PersistentCounter('counter');

// Event listeners with proper typing
document.getElementById('increment')!.addEventListener('click', () => counter.update('increment'));
document.getElementById('decrement')!.addEventListener('click', () => counter.update('decrement'));
document.getElementById('reset')!.addEventListener('click', () => counter.update('reset'));
