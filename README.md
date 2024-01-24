1. Single Responsibility Principle (SRP)
- Definition: A class should have only one reason to change, meaning it should have a single responsibility.
- Explanation: SRP emphasizes that a class should focus on doing one thing and doing it well. This principle improves maintainability by ensuring that changes to a specific functionality only affect one class.

2. Open/Closed Principle (OCP)
- Definition: Software entities should be open for extension but closed for modification.
- Explanation: OCP encourages creating code that can be extended to add new features without altering existing code. This principle promotes maintainability and avoid introducing bugs in the existing codebase.

3. Liskov Substitution Principle (LSP)
- Definition: Objects of a superclass should be replaceable with objects of its subclasses without affecting the correctness of the program.
- Explanation: LSP ensures that derived classes can be used as substitutes for their base classes. This principle prevents unexpected behavior when inheriting from a base class.

4. Interface Segregation Principle (ISP)
- Definition: A client should not be forced to depend on interfaces it does not use.
- Explanation: ISP suggests segregating large interfaces into smaller, specific ones. This way, client can implement only the methods they need, avoiding unnecessary dependencies.

5. Dependecy Inversion Principle (DIP)
- Definition: High-level modules should not depend on low-level modules. Both should depend on abstractions.
- Exaplanation: DIP encourages using abstractions (interfaces) to define high-level modules dependencies. This principle allows for flexiable and easily maintainable code, promoting code reusability. 