# abstrac-fabric
Решение задачи по реализации паттерна "абстрактная фабрика" в процессе изучения паттернов проектирования.

Вам даны шесть классов: EasyMap, EasyObjects, MediumMap, MediumObjects, HardMap, HardObjects. Каждый из классов генерирует карту и список объектов для неё.
На их основе Вам необходимо создать абстрактную фабрику AbstractLevel c классовыми методами get_map() и get_objects(). Её реализации должны носить имена EasyLevel, MediumLevel и HardLevel.
